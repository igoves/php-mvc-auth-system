<?php

return [
    //
    // Core Config
    // =========================================================================
    'DATABASE_HOST' => 'mysql',
    'DATABASE_NAME' => 'test',
    'DATABASE_USERNAME' => 'root',
    'DATABASE_PASSWORD' => 'root',
    //
    // Cookie Config
    // =========================================================================
    'COOKIE_DEFAULT_EXPIRY' => 604800,
    'COOKIE_USER' => 'user',
    //
    // Session Config
    // =========================================================================
    'SESSION_ERRORS' => 'errors',
    'SESSION_FLASH_DANGER' => 'danger',
    'SESSION_FLASH_INFO' => 'info',
    'SESSION_FLASH_SUCCESS' => 'success',
    'SESSION_FLASH_WARNING' => 'warning',
    'SESSION_TOKEN' => 'token',
    'SESSION_TOKEN_TIME' => 'token_time',
    'SESSION_USER' => 'user',
    //
    // Texts Config
    // =========================================================================
    'TEXTS_EN' => [
        //
        // Login Model Texts
        // =====================================================================
        'LOGIN_INVALID_PASSWORD' => 'The email / password combination you have entered is incorrect',
        'LOGIN_USER_NOT_FOUND' => 'The email you have entered has not been found!',
        //
        // Register Model Texts
        // =====================================================================
        'REGISTER_USER_CREATED' => 'Your account has been successfully created!',
        //
        // User Model Texts
        // =====================================================================
        'USER_CREATE_EXCEPTION' => 'There was a problem creating this account!',
        'USER_UPDATE_EXCEPTION' => 'There was a problem updating this account!',
        //
        // Input Utility Texts
        // =====================================================================
        'INPUT_INCORRECT_CSRF_TOKEN' => 'Cross-site request forgery verification failed!',
        //
        // Validate Utility Texts
        // =====================================================================
        'VALIDATE_FILTER_RULE' => '%ITEM% is not a valid %RULE_VALUE%!',
        'VALIDATE_MISSING_INPUT' => 'Unable to validate %ITEM%!',
        'VALIDATE_MISSING_METHOD' => 'Unable to validate %ITEM%!',
        'VALIDATE_MATCHES_RULE' => '%RULE_VALUE% must match %ITEM%.',
        'VALIDATE_MAX_CHARACTERS_RULE' => '%ITEM% can only be a maximum of %RULE_VALUE% characters.',
        'VALIDATE_MIN_CHARACTERS_RULE' => '%ITEM% must be a minimum of %RULE_VALUE% characters.',
        'VALIDATE_REQUIRED_RULE' => '%ITEM% is required!',
        'VALIDATE_UNIQUE_RULE' => '%ITEM% already exists.',
    ],
    'TEXTS_RU' => [
        //
        // Login Model Texts
        // =====================================================================
        'LOGIN_INVALID_PASSWORD' => 'Введенная вами комбинация электронной почты и пароля неверна',
        'LOGIN_USER_NOT_FOUND' => 'Введенный вами адрес электронной почты не найден!',
        //
        // Register Model Texts
        // =====================================================================
        'REGISTER_USER_CREATED' => 'Ваш аккаунт был успешно создан!',
        //
        // User Model Texts
        // =====================================================================
        'USER_CREATE_EXCEPTION' => 'При создании этой учетной записи возникла проблема!',
        'USER_UPDATE_EXCEPTION' => 'Возникла проблема при обновлении этого аккаунта!',
        //
        // Input Utility Texts
        // =====================================================================
        'INPUT_INCORRECT_CSRF_TOKEN' => 'Проверка подделки межсайтовых запросов не удалась!',
        //
        // Validate Utility Texts
        // =====================================================================
        'VALIDATE_FILTER_RULE' => '%ITEM% не является действительным %RULE_VALUE%!',
        'VALIDATE_MISSING_INPUT' => 'Невозможно проверить %ITEM%!',
        'VALIDATE_MISSING_METHOD' => 'Невозможно проверить %ITEM%!',
        'VALIDATE_MATCHES_RULE' => '%RULE_VALUE% должен соответствовать %ITEM%.',
        'VALIDATE_MAX_CHARACTERS_RULE' => '%ITEM% может содежать максимум %RULE_VALUE% знаков.',
        'VALIDATE_MIN_CHARACTERS_RULE' => '%ITEM% должен содержать %RULE_VALUE% знаков.',
        'VALIDATE_REQUIRED_RULE' => 'Поле %ITEM% обязательно!',
        'VALIDATE_UNIQUE_RULE' => '%ITEM% уже есть.',
    ],

];
