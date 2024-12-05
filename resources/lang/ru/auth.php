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
    'failed' => 'Неверное имя пользователя или пароль.',
    'password' => 'Некорректный пароль.',
    'throttle' => 'Слишком много попыток входа. Пожалуйста, попробуйте еще раз через :seconds секунд.',

    // 2FAuth
    'sign_out' => 'Выйти',
    'sign_in' => 'Войти',
    'sign_in_using' => 'Войти с помощью',
    'if_administrator' => 'Администратор?',
    'sign_in_here' => 'Вы можете войти без SSO',
    'or_continue_with' => 'Также вы можете продолжить с:',
    'password_login_and_webauthn_are_disabled' => 'Вход с помощью пароля и WebAuthn отключен.',
    'sign_in_using_sso' => 'Выберите поставщика SSO для авторизации:',
    'no_provider' => 'нет поставщика',
    'no_sso_provider_or_provider_is_missing' => 'Поставщик отсутствует?',
    'see_how_to_enable_sso' => 'Посмотрите, как включить поставщика',
    'sign_in_using_security_device' => 'Войти, используя устройство безопасности',
    'login_and_password' => 'имени пользователя и пароля',
    'register' => 'Регистрация',
    'welcome_to_2fauth' => 'Добро пожаловать в 2FAuth',
    'autolock_triggered' => 'Сработала автоматическая блокировка',
    'autolock_triggered_punchline' => 'Произошло событие которое, отслеживалось функцией автоблокировки. Вы были автоматически отключены.',
    'already_authenticated' => 'Вы уже аутентифицированы',
    'authentication' => 'Аутентификация',
    'maybe_later' => 'Не сейчас',
    'user_account_controlled_by_proxy' => 'Учётная запись создана через прокси-аунтификацию.<br />Управляйте учётной записью на уровне прокси.',
    'auth_handled_by_proxy' => 'Аутентификация осуществляется на обратном прокси, настройки ниже не доступны.<br />Управление аутентификацией осуществляется на прокси.',
    'sso_only_x_settings_are_disabled' => 'Аутентификация ограничена только SSO, :auth_method отключен',
    'confirm' => [
        'logout' => 'Вы уверены, что хотите выйти?',
        'revoke_device' => 'Вы уверены, что хотите удалить это устройство?',
        'delete_account' => 'Вы уверены, что хотите удалить свою учётную запись?',
    ],
    'webauthn' => [
        'security_device' => 'устройства безопасности',
        'security_devices' => 'Устройства безопасности',
        'security_devices_legend' => 'Устройства аутентификации, которые можно использовать для входа в систему 2FAuth, такие как ключи безопасности (например, Yubikey) или смартфоны с биометрическими возможностями (например, Apple FaceId/TouchId)',
        'enhance_security_using_webauthn' => 'Вы можете повысить безопасность учётной записи 2FAuth, включив аутентификацию WebAuthn.<br /><br />
            WebAuthn позволяет использовать доверенные устройства (например, Yubikeys или смартфоны с биометрическими возможностями) для безопасного входа.',
        'use_security_device_to_sign_in' => 'Будьте готовы пройти аутентификацию с помощью (одного из) ваших устройств безопасности. Вставьте ключ, снимите маску или перчатки и т.д.',
        'lost_your_device' => 'Потеряли устройство?',
        'recover_your_account' => 'Восстановите доступ к учётной записи',
        'account_recovery' => 'Восстановление доступа к учётной записи',
        'recovery_punchline' => '2FAuth отправит вам ссылку для восстановления на этот адрес электронной почты. Нажмите на ссылку в полученном письме и следуйте инструкциям.<br /><br />Убедитесь, что вы откроете письмо на вашем полностью проверенном устройстве.',
        'send_recovery_link' => 'Отправить ссылку для восстановления',
        'account_recovery_email_sent' => 'Письмо для восстановления доступа к учётной записи отправлено!',
        'disable_all_security_devices' => 'Отключить все устройства безопасности',
        'disable_all_security_devices_help' => 'Все ваши устройства безопасности будут отозваны. Используйте эту опцию, если вы потеряли их или их безопасность была скомпрометирована.',
        'register_a_new_device' => 'Зарегистрировать новое устройство',
        'register_a_device' => 'Зарегистрировать устройство',
        'device_successfully_registered' => 'Устройство успешно зарегистрировано',
        'device_revoked' => 'Устройство успешно деактивировано',
        'revoking_a_device_is_permanent' => 'Удаление устройства необратимо',
        'recover_account_instructions' => 'Чтобы восстановить вашу учётную запись, 2FAuth сбрасывает некоторые настройки Webauthn, чтобы вы могли войти с помощью электронной почты и пароля.',
        'invalid_recovery_token' => 'Неверный код восстановления',
        'webauthn_login_disabled' => 'Webauthn вход отключен',
        'invalid_reset_token' => 'Этот токен сброса недействителен.',
        'rename_device' => 'Переименовать устройство',
        'my_device' => 'Моё устройство',
        'unknown_device' => 'Неизвестное устройство',
        'use_webauthn_only' => [
            'label' => 'Использовать только WebAuthn',
            'help' => 'Сделать WebAuthn единственным авторизованным методом входа в вашу учётную запись 2FAuth. Это рекомендуемая настройка, позволяющая воспользоваться преимуществами повышенной безопасности WebAuthn.<br /><br />
                В случае утери устройства вы сможете восстановить свою учётную запись, сбросив эту опцию и войдя в систему, используя свой адрес электронной почты и пароль.<br /><br />
                Внимание! Форма электронной почты и пароля остаётся доступной, несмотря на то, что эта опция включена, но она всегда будет возвращать ответ «Ошибка аутентификации».'
        ],
        'need_a_security_device_to_enable_options' => 'Настройте хотя бы одно устройство для включения следующих параметров',
        'options' => 'Параметры',
    ],
    'forms' => [
        'name' => 'Имя',
        'login' => 'Вход',
        'webauthn_login' => 'WebAuthn вход',
        'sso_login' => 'Вход с использованием SSO',
        'email' => 'Email',
        'password' => 'Пароль',
        'reveal_password' => 'Показать пароль',
        'hide_password' => 'Скрыть пароль',
        'confirm_password' => 'Подтверждение пароля',
        'new_password' => 'Новый пароль',
        'confirm_new_password' => 'Подтвердить новый пароль',
        'dont_have_account_yet' => 'Еще нет учётной записи?',
        'already_register' => 'Уже зарегистрированы?',
        'authentication_failed' => 'Ошибка аутентификации',
        'forgot_your_password' => 'Забыли пароль?',
        'request_password_reset' => 'Восстановить',
        'reset_your_password' => 'Восстановить пароль',
        'reset_password' => 'Восстановить пароль',
        'disabled_in_demo' => 'Функция отключена в демонастрационном режиме',
        'sso_only_form_restricted_to_admin' => 'Обычные пользователи должны войти в систему с помощью SSO. Другие методы предназначены только для администратора.',
        'new_password' => 'Новый пароль',
        'current_password' => [
            'label' => 'Текущий пароль',
            'help' => 'Введите ваш текущий пароль для подтверждения, что это действительно вы'
        ],
        'change_password' => 'Изменить пароль',
        'send_password_reset_link' => 'Отправить ссылку для восстановления пароля',
        'password_successfully_reset' => 'Пароль успешно сброшен',
        'edit_account' => 'Редактировать учётную запись',
        'profile_saved' => 'Профиль успешно обновлён!',
        'welcome_to_demo_app_use_those_credentials' => 'Добро пожаловать в демонстрационный режим 2FAuth. <br><br>Вы можете подключиться используя email адрес <strong>demo@2fauth.app</strong> и пароль <strong>demo</strong>',
        'welcome_to_testing_app_use_those_credentials' => 'Добро пожаловать в тестовое окружение 2FAuth.<br><br>Используйте email адрес <strong>testing@2fauth.app</strong> и пароль <strong>password</strong>',
        'register_punchline' => 'Добро пожаловать в <b>2FAuth</b>.<br/>Вам необходима учётная запись, чтобы продолжить, пожалуйста, зарегистрируйте себя.',
        'reset_punchline' => '2FAuth вышлет вам ссылку для сброса пароля на этот адрес. Нажмите на ссылку в полученном письме, чтобы установить новый пароль.',
        'name_this_device' => 'Назвать это устройство',
        'delete_account' => 'Удалить учётную запись',
        'delete_your_account' => 'Удалить учётную запись',
        'delete_your_account_and_reset_all_data' => 'Ваша учётная запись пользователя будет удалена вместе со всеми вашими данными 2FA.<br />Это действие невозможно отменить.',
        'reset_your_password_to_delete_your_account' => 'Если вы всегда использовали SSO для входа, выйдите из системы, а затем воспользуйтесь функцией сброса пароля, чтобы получить пароль и заполнить эту форму.',
        'deleting_2fauth_account_does_not_impact_provider' => 'Удаление вашей учётной записи 2FAuth не влияет на вашу внешнюю учётную запись SSO.',
        'user_account_successfully_deleted' => 'Учётная запись пользователя успешно удалена',
        'has_lower_case' => 'маленькие буквы',
        'has_upper_case' => 'заглавные буквы',
        'has_special_char' => 'специальный символы',
        'has_number' => 'цифры',
        'is_long_enough' => 'Минимум 8 символов',
        'mandatory_rules' => 'Обязательно',
        'optional_rules_you_should_follow' => 'Рекомендуется (настоятельно)',
        'caps_lock_is_on' => 'Caps lock включен',
    ],
    'sso_providers' => [
        'unknown' => 'неизвестен',
        'github' => 'GitHub',
        'openid' => 'OpenID'
    ]
];
