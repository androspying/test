<?php

/**
 * The MIT License (MIT)
 * Copyright (c) 2024 Bubka
 * Copyright (c) 2024 Anthony Rappa
 * Copyright (c) 2017 Yaakov Dahan
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and
 * associated documentation files (the "Software"), to deal in the Software without restriction,
 * including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial
 * portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT
 * LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace App\Listeners\Authentication;

use App\Notifications\SignedInWithNewDeviceNotification;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Carbon;
use TypeError;

class LoginListener extends AbstractAccessListener
{
    /**
     * Handle the event.
     */
    public function handle(mixed $event) : void
    {
        if (! $event instanceof Login) {
            throw new TypeError(self::class . '::handle(): Argument #1 ($event) must be of type ' . Login::class);
        }

        /**
         * @var \App\Models\User
         */
        $user = $event->user;
        $ip   = config('2fauth.proxy_headers.forIp')
            ? $this->request->header(config('2fauth.proxy_headers.forIp'), $this->request->ip())
            : $this->request->ip();
        $userAgent = $this->request->userAgent();
        $known     = $user->authentications()
            ->whereIpAddress($ip)
            ->whereUserAgent($userAgent)
            ->whereLoginSuccessful(true)
            ->whereGuard($event->guard)
            ->first();
        $newUser = Carbon::parse($user->{$user->getCreatedAtColumn()})->diffInMinutes(Carbon::now(), true) < 1;

        $log = $user->authentications()->create([
            'ip_address'       => $ip,
            'user_agent'       => $userAgent,
            'login_at'         => now(),
            'login_successful' => true,
            'guard'            => $event->guard,
            'login_method'     => $this->loginMethod(),
        ]);

        if (! $known && ! $newUser && $user->preferences['notifyOnNewAuthDevice'] == true) {
            $user->notify(new SignedInWithNewDeviceNotification($log));
        }
    }
}
