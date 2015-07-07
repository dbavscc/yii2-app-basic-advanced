<?php
return [
    'vendorPath' => dirname(__DIR__) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'params' => [
        'adminEmail' => 'admin@example.com',
        'supportEmail' => 'noreply@example.com',
        'user.passwordResetTokenExpire' => 3600
    ],
];
