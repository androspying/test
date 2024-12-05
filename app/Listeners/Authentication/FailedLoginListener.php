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

use App\Notifications\FailedLoginNotification;
use Illuminate\Auth\Events\Failed;
use Illuminate\Support\Facades\Log;
use TypeError;

class FailedLoginListener extends AbstractAccessListener
{
    /**
     * Handle the event.
     */
    public function handle(mixed $event) : void
    {
        if (! $event instanceof Failed) {
            throw new TypeError(self::class . '::handle(): Argument #1 ($event) must be of type ' . Failed::class);
        }

        if ($event->user) {
            /**
             * @var \App\Models\User
             */
            $user = $event->user;
            $ip   = config('2fauth.proxy_headers.forIp')
            ? $this->request->header(config('2fauth.proxy_headers.forIp'), $this->request->ip())
            : $this->request->ip();

            $log = $user->authentications()->create([
                'ip_address'       => $ip,
                'user_agent'       => $this->request->userAgent(),
                'login_at'         => now(),
                'login_successful' => false,
                'guard'            => $event->guard,
                'login_method'     => $this->loginMethod(),
            ]);

            if ($user->preferences['notifyOnFailedLogin'] == true) {
                $user->notify(new FailedLoginNotification($log));
            }
        } else {
            Log::info(sprintf('%s received an event with a null $user member. Nothing has been written to the auth log', self::class));
        }
    }
}
