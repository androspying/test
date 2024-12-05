<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'openid' => [
        'token_url' => env('OPENID_TOKEN_URL'),
        'authorize_url' => env('OPENID_AUTHORIZE_URL'),
        'userinfo_url' => env('OPENID_USERINFO_URL'),
        'client_id' => env('OPENID_CLIENT_ID'),
        'client_secret' => env('OPENID_CLIENT_SECRET'),
        'redirect' => env('APP_URL') . '/socialite/callback/openid',
    ],

    'github' => [
        'client_id' => env('GITHUB_CLIENT_ID'),
        'client_secret' => env('GITHUB_CLIENT_SECRET'),
        'redirect' => env('APP_URL') . '/socialite/callback/github',
    ],

    // 'google' => [    
    //     'client_id' => env('GOOGLE_CLIENT_ID'),  
    //     'client_secret' => env('GOOGLE_CLIENT_SECRET'),  
    //     'redirect' => env('APP_URL') . '/socialite/callback/google ',
    // ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

];