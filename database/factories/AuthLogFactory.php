<?php

namespace Database\Factories;

use ParagonIE\ConstantTime\Base32;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AuthLog>
 */
class AuthLogFactory extends Factory
{
    public const IP = '127.0.0.1';
    public const USER_AGENT = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/115.0';

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ip_address'       => self::IP,
            'user_agent'       => self::USER_AGENT,
            'login_at'         => now(),
            'login_successful' => true,
            'logout_at'        => null,
            'guard'            => 'web-guard',
            'login_method'     => 'password',
        ];
    }

    /**
     * Indicate that the model has login at the specified date.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AuthLog>
     */
    public function at(Carbon $at)
    {
        return $this->state(function (array $attributes) use ($at) {
            return [
                'login_at' => $at,
            ];
        });
    }

    /**
     * Indicate that the model has login before last year.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AuthLog>
     */
    public function daysAgo(int $days)
    {
        return $this->state(function (array $attributes) use ($days) {
            $loginDate  = now()->subDays($days);
            $logoutDate = $loginDate->addHours(1);

            return [
                'login_at'         => $loginDate,
                'logout_at'        => $logoutDate,
            ];
        });
    }

    /**
     * Indicate that the model is a failed login.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AuthLog>
     */
    public function failedLogin()
    {
        return $this->state(function (array $attributes) {
            return [
                'login_successful' => false,
            ];
        });
    }

    /**
     * Indicate that the model has a logout date too.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AuthLog>
     */
    public function withLogout()
    {
        return $this->state(function (array $attributes) {
            return [
                'logout_at' => now(),
            ];
        });
    }

    /**
     * Indicate that the model has a logout date only, without login date.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AuthLog>
     */
    public function logoutOnly()
    {
        return $this->state(function (array $attributes) {
            return [
                'login_at'         => null,
                'login_successful' => false,
                'logout_at'        => now(),
            ];
        });
    }

    /**
     * Indicate that the model has login during last month.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AuthLog>
     */
    public function duringLastMonth()
    {
        return $this->state(function (array $attributes) {
            $loginDate  = now()->subDays(15);
            $logoutDate = $loginDate->addHours(1);

            return [
                'login_at'         => $loginDate,
                'logout_at'        => $logoutDate,
            ];
        });
    }

    /**
     * Indicate that the model has login during last 3 months.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AuthLog>
     */
    public function duringLastThreeMonth()
    {
        return $this->state(function (array $attributes) {
            $loginDate  = now()->subMonths(2);
            $logoutDate = $loginDate->addHours(1);

            return [
                'login_at'         => $loginDate,
                'logout_at'        => $logoutDate,
            ];
        });
    }

    /**
     * Indicate that the model has login during last 6 month.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AuthLog>
     */
    public function duringLastSixMonth()
    {
        return $this->state(function (array $attributes) {
            $loginDate  = now()->subMonths(4);
            $logoutDate = $loginDate->addHours(1);

            return [
                'login_at'         => $loginDate,
                'logout_at'        => $logoutDate,
            ];
        });
    }

    /**
     * Indicate that the model has login during last year.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AuthLog>
     */
    public function duringLastYear()
    {
        return $this->state(function (array $attributes) {
            $loginDate  = now()->subMonths(10);
            $logoutDate = $loginDate->addHours(1);

            return [
                'login_at'         => $loginDate,
                'logout_at'        => $logoutDate,
            ];
        });
    }

    /**
     * Indicate that the model has login before last year.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AuthLog>
     */
    public function beforeLastYear()
    {
        return $this->state(function (array $attributes) {
            $loginDate  = now()->subYears(2);
            $logoutDate = $loginDate->addHours(1);

            return [
                'login_at'         => $loginDate,
                'logout_at'        => $logoutDate,
            ];
        });
    }
}