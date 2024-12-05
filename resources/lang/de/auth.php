<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */
   
    // Laravel
    'failed' => 'Diese Angaben stimmen nicht mit unseren Aufzeichnungen überein.',
    'password' => 'Das angegebene Passwort ist falsch.',
    'throttle' => 'Zu viele Anmeldeversuche. Bitte versuchen Sie es in :seconds Sekunden erneut.',

    // 2FAuth
    'sign_out' => 'Abmelden',
    'sign_in' => 'Anmelden',
    'sign_in_using' => 'Anmelden mit',
    'if_administrator' => 'Administrator?',
    'sign_in_here' => 'Sie können sich ohne SSO anmelden',
    'or_continue_with' => 'Sie können auch fortfahren mit:',
    'password_login_and_webauthn_are_disabled' => 'Passwort-Login und WebAuthn sind deaktiviert.',
    'sign_in_using_sso' => 'Wählen Sie einen SSO-Anbieter zum Anmelden:',
    'no_provider' => 'kein Anbieter',
    'no_sso_provider_or_provider_is_missing' => 'Anbieter fehlt?',
    'see_how_to_enable_sso' => 'Wie man einen Anbieter aktiviert',
    'sign_in_using_security_device' => 'Mit einem Sicherheitsgerät anmelden',
    'login_and_password' => 'Benutzername & Passwort',
    'register' => 'Registrieren',
    'welcome_to_2fauth' => 'Willkommen bei 2FAuth',
    'autolock_triggered' => 'Automatische Sperre ausgelöst',
    'autolock_triggered_punchline' => 'Automatische Sperre ausgelöst, Sie wurden abgemeldet',
    'already_authenticated' => 'Bereits authentifiziert, bitte erst abmelden',
    'authentication' => 'Authentifizierung',
    'maybe_later' => 'Vielleicht später',
    'user_account_controlled_by_proxy' => 'Benutzerkonto, das von einem Authentifizierungsproxy zur Verfügung gestellt wurde.<br />Verwalten Sie das Konto auf Proxy-Ebene.',
    'auth_handled_by_proxy' => 'Authentifizierung von einem Reverse-Proxy verwaltet, unten sind die Einstellungen deaktiviert.<br />Authentifizierung auf Proxy-Ebene verwalten.',
    'sso_only_x_settings_are_disabled' => 'Authentifizierung ist nur auf SSO beschränkt, :auth_method ist deaktiviert',
    'confirm' => [
        'logout' => 'Sind Sie sicher, dass Sie sich abmelden möchten?',
        'revoke_device' => 'Möchten Sie das Gerät wirklich entfernen?',
        'delete_account' => 'Möchten Sie Ihr Konto wirklich löschen?',
    ],
    'webauthn' => [
        'security_device' => 'einem Sicherheitsgerät',
        'security_devices' => 'Sicherheitsgeräte',
        'security_devices_legend' => 'Authentifizierungsgeräte, mit denen Sie sich in 2FAuth anmelden können, wie z.B. Sicherheitsschlüssel (z.B. Yubikey) oder Smartphones mit biometrischen Fähigkeiten (z.B. Apple FaceID/TouchID)',
        'enhance_security_using_webauthn' => 'Sie können die Sicherheit Ihres 2FAuth-Accounts verbessern, indem Sie die WebAuthn-Authentifizierung aktivieren.<br /><br />
            WebAuthn erlaubt es Ihnen, sich schnell und sicher mit vertrauenswürdigen Geräten (wie Yubikeys oder Smartphones mit biometrischen Fähigkeiten) anzumelden.',
        'use_security_device_to_sign_in' => 'Machen Sie sich bereit, sich mit (einem) Ihren Sicherheitsgeräten zu authentifizieren. Schließen Sie Ihren Schlüssel an, entfernen Sie die Gesichtsmaske oder Handschuhe, etc.',
        'lost_your_device' => 'Haben Sie Ihr Gerät verloren?',
        'recover_your_account' => 'Konto wiederherstellen',
        'account_recovery' => 'Kontowiederherstellung',
        'recovery_punchline' => '2FAuth wird Ihnen einen Wiederherstellungslink an diese E-Mail-Adresse senden. Klicken Sie auf den Link in der erhaltenen E-Mail und folgen Sie den Anweisungen.<br /><br />Stellen Sie sicher, dass Sie die E-Mail auf einem Gerät öffnen, das vollständig Ihnen gehört.',
        'send_recovery_link' => 'Wiederherstellungs-Link senden',
        'account_recovery_email_sent' => 'E-Mail zur Kontowiederherstellung versendet!',
        'disable_all_security_devices' => 'Alle Sicherheitsgeräte deaktivieren',
        'disable_all_security_devices_help' => 'Alle Ihre Sicherheitsgeräte werden entzogen. Verwenden Sie diese Option, wenn Sie ein Gerät verloren haben oder seine Sicherheit beeinträchtigt wurde.',
        'register_a_new_device' => 'Ein neues Gerät registrieren',
        'register_a_device' => 'Ein Gerät registrieren',
        'device_successfully_registered' => 'Gerät erfolgreich registriert',
        'device_revoked' => 'Gerät erfolgreich widerrufen',
        'revoking_a_device_is_permanent' => 'Das Widerrufen eines Gerätes ist dauerhaft',
        'recover_account_instructions' => 'Um Ihr Konto wiederherzustellen, setzt 2FAuth einige Webauthn-Einstellungen zurück, damit Sie sich mit Ihrer E-Mail und Ihrem Passwort anmelden können.',
        'invalid_recovery_token' => 'Ungültiger Wiederherstellungsschlüssel',
        'webauthn_login_disabled' => 'Webauthn-Login deaktiviert',
        'invalid_reset_token' => 'Der Schlüssel zum Zurücksetzen des Passwortes ist ungültig.',
        'rename_device' => 'Gerät umbenennen',
        'my_device' => 'Mein Gerät',
        'unknown_device' => 'Unbekanntes Gerät',
        'use_webauthn_only' => [
            'label' => 'Nur WebAuthn verwenden',
            'help' => 'WebAuthn als die einzige autorisierte Methode zulassen, um sich in Ihr 2FAuth-Konto einzuloggen. Diese Option ist empfohlen und bietet eine verbesserte Sicherheit durch WebAuthn.<br /><br />
                Bei Verlust des WebAuthn-Geräts Sie können Ihr Konto wiederherstellen, indem Sie diese Option zurücksetzen und sich mit Ihrer E-Mail und Ihrem Passwort anmelden.<br /><br />
                Achtung! Das E-Mail & Passwort-Anmeldeformular bleibt verfügbar, obwohl diese Option aktiviert ist. Eine Anmeldung hiermit führt jedoch immer zu der Meldung \'Authentifizierung fehlgeschlagen\'.'
        ],
        'need_a_security_device_to_enable_options' => 'Mindestens ein Gerät einrichten, um die nachfolgenden Optionen zu aktiveren',
        'options' => 'Einstellungen',
    ],
    'forms' => [
        'name' => 'Name',
        'login' => 'Anmeldung',
        'webauthn_login' => 'WebAuthn-Anmeldung',
        'sso_login' => 'SSO-Login',
        'email' => 'E-Mail',
        'password' => 'Passwort',
        'reveal_password' => 'Passwort anzeigen',
        'hide_password' => 'Passwort verbergen',
        'confirm_password' => 'Passwort bestätigen',
        'new_password' => 'Neues Passwort',
        'confirm_new_password' => 'Neues Passwort bestätigen',
        'dont_have_account_yet' => 'Sie haben noch keinen Account?',
        'already_register' => 'Schon registriert?',
        'authentication_failed' => 'Anmeldung fehlgeschlagen',
        'forgot_your_password' => 'Passwort vergessen?',
        'request_password_reset' => 'Zurücksetzen',
        'reset_your_password' => 'Passwort zurücksetzen',
        'reset_password' => 'Password zurücksetzen',
        'disabled_in_demo' => 'Funktion im Demo-Modus deaktiviert',
        'sso_only_form_restricted_to_admin' => 'Normale Benutzer müssen sich mit SSO anmelden. Andere Methoden sind nur für Administratoren gedacht.',
        'new_password' => 'Neues Passwort',
        'current_password' => [
            'label' => 'Aktuelles Passwort',
            'help' => 'Geben Sie Ihr aktuelles Passwort ein, um zu bestätigen, dass Sie es sind'
        ],
        'change_password' => 'Passwort ändern',
        'send_password_reset_link' => 'Link zum Zurücksetzen des Passworts senden',
        'password_successfully_reset' => 'Passwort erfolgreich zurückgesetzt',
        'edit_account' => 'Konto bearbeiten',
        'profile_saved' => 'Profil erfolgreich aktualisiert!',
        'welcome_to_demo_app_use_those_credentials' => 'Willkommen bei der 2FAuth-Demo.<br><br>Sie können sich mit der E-Mail-Adresse <strong>demo@2fauth.app</strong> und dem Passwort <strong>demo</strong> anmelden',
        'welcome_to_testing_app_use_those_credentials' => 'Willkommen bei der 2FAuth-Testinstanz.<br><br>Verwenden Sie die E-Mail-Adresse <strong>testing@2fauth.app</strong> und das Passwort <strong>password</strong>',
        'register_punchline' => 'Willkommen bei <b>2FAuth</b>.<br/>Sie müssen sich mit einem Konto anmelden, bitte registrieren Sie sich.',
        'reset_punchline' => '2FAuth sendet Ihnen einen Link zum Zurücksetzen des Passworts an diese Adresse. Klicken Sie auf den Link in der erhaltenen E-Mail, um ein neues Passwort festzulegen.',
        'name_this_device' => 'Dieses Gerät benennen',
        'delete_account' => 'Konto löschen',
        'delete_your_account' => 'Ihr Konto Löschen',
        'delete_your_account_and_reset_all_data' => 'Ihr Benutzerkonto wird gelöscht, ebenso wie alle Ihre 2FA-Daten. Es gibt kein Zurück mehr.',
        'reset_your_password_to_delete_your_account' => 'Wenn Sie sich immer mit SSO angemeldet haben, melden Sie sich ab und verwenden Sie die Funktion zum Zurücksetzen des Passworts, um ein Passwort zu erhalten, damit Sie dieses Formular ausfüllen können.',
        'deleting_2fauth_account_does_not_impact_provider' => 'Das Löschen Ihres 2FAuth-Kontos hat keine Auswirkungen auf Ihr externes SSO-Konto.',
        'user_account_successfully_deleted' => 'Benutzerkonto wurde erfolgreich gelöscht',
        'has_lower_case' => 'Beinhaltet Kleinbuchstaben',
        'has_upper_case' => 'Beinhaltet Großbuchstaben',
        'has_special_char' => 'Beinhaltet Sonderzeichen',
        'has_number' => 'Beinhaltet Zahlen',
        'is_long_enough' => 'Besteht aus mindestens 8 Zeichen',
        'mandatory_rules' => 'Erforderlich',
        'optional_rules_you_should_follow' => 'Empfohlen (sehr)',
        'caps_lock_is_on' => 'Die Feststelltaste ist aktiviert',
    ],
    'sso_providers' => [
        'unknown' => 'unbekannt',
        'github' => 'GitHub',
        'openid' => 'OpenID'
    ]
];
