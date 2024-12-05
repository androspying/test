<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application infos
    |--------------------------------------------------------------------------
    |
    */

    'version' => '5.4.3',
    'repository' => 'https://github.com/Bubka/2FAuth',
    'latestReleaseUrl' => 'https://api.github.com/repos/Bubka/2FAuth/releases/latest',
    'installDocUrl' => 'https://docs.2fauth.app/getting-started/installation/self-hosted-server/',
    'ssoDocUrl' => 'https://docs.2fauth.app/security/authentication/sso/',
    'exportSchemaUrl' => 'https://docs.2fauth.app/usage/migration/#export-schema',

    /*
    |--------------------------------------------------------------------------
    | 2FAuth config
    |--------------------------------------------------------------------------
    |
    */

    'config' => [
        'isDemoApp' => env('IS_DEMO_APP', false),
        'isTestingApp' => env('IS_TESTING_APP', false),
        'trustedProxies' => env('TRUSTED_PROXIES', null),
        'outgoingProxy' => env('PROXY_FOR_OUTGOING_REQUESTS', ''),
        'proxyLogoutUrl' => env('PROXY_LOGOUT_URL', null),
        'appSubdirectory' => env('APP_SUBDIRECTORY', ''),
        'authLogRetentionTime' => envUnlessEmpty('AUTHENTICATION_LOG_RETENTION', 365),
        'contentSecurityPolicy' => envUnlessEmpty('CONTENT_SECURITY_POLICY', true),
    ],

    /*
    |--------------------------------------------------------------------------
    | Proxy headers
    |--------------------------------------------------------------------------
    |
    */
    
    'proxy_headers' => [
        'forIp' => env('PROXY_HEADER_FOR_IP', null),
    ],

    /*
    |--------------------------------------------------------------------------
    | 2FAuth API config
    |--------------------------------------------------------------------------
    |
    */

    'api' => [
        'throttle' => env('THROTTLE_API', 60),
    ],

    /*
    |--------------------------------------------------------------------------
    | 2FAuth available translations
    |--------------------------------------------------------------------------
    |
    */

    'locales' => [
        'en',
        'fr',
        'de',
        'zh',
        'es',
        'bg',
        'ru',
        'ja',
        'hi',
        'tr'
    ],

    /*
    |--------------------------------------------------------------------------
    | Default values for app (global) settings
    | These settings can be overloaded and persisted using the SettingService
    |--------------------------------------------------------------------------
    |
    */

    'settings' => [
        'useEncryption' => false,
        'checkForUpdate' => true,
        'lastRadarScan' => 0,
        'latestRelease' => false,
        'disableRegistration' => false,
        'enableSso' => true,
        'useSsoOnly' => false,
        'restrictRegistration' => false,
        'restrictList' => '',
        'restrictRule' => '',
        'keepSsoRegistrationEnabled' => false,
        'storeIconsInDatabase' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Default values for user preferences
    | These settings can be overloaded and persisted by each user
    |--------------------------------------------------------------------------
    |
    */

    'preferences' => [
        'showOtpAsDot' => false,
        'revealDottedOTP' => false,
        'closeOtpOnCopy' => false,
        'copyOtpOnDisplay' => false,
        'clearSearchOnCopy' => false,
        'useBasicQrcodeReader' => false,
        'displayMode' => 'list',
        'showAccountsIcons' => true,
        'kickUserAfter' => 15,
        'activeGroup' => 0,
        'rememberActiveGroup' => true,
        'viewDefaultGroupOnCopy' => false,
        'defaultGroup' => 0,
        'defaultCaptureMode' => 'livescan',
        'useDirectCapture' => false,
        'useWebauthnOnly' => false,
        'getOfficialIcons' => true,
        'theme' => 'system',
        'formatPassword' => true,
        'formatPasswordBy' => 0.5,
        'lang' => 'browser',
        'getOtpOnRequest' => true,
        'notifyOnNewAuthDevice' => false,
        'notifyOnFailedLogin' => false,
        'timezone' => env('APP_TIMEZONE', 'UTC'),
        'sortCaseSensitive' => false,
        'autoCloseTimeout' => 2,
        'AutoSaveQrcodedAccount' => false,
        'showEmailInFooter' => true,
    ],

];
