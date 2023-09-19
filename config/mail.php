<?php

return [

    'default' => env('MAIL_MAILER', 'smtp'),

    'mailers' => [
        'smtp' => [
            'transport' => 'smtp',
            'host' => env('MAIL_HOST', 'mail.munihaelectronics.com'),
            'port' => env('MAIL_PORT', 587),
            'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'timeout' => null,
            'auth_mode' => null,
        ],

        // ... other mailer configurations ...

    ],

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'mayin@munihaelectronics.com'),
        'name' => env('MAIL_FROM_NAME', 'Laravel'),
    ],

    'markdown' => [
        'theme' => 'default',
        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];