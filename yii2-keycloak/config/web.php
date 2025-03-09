<?php
return [
    'id' => 'yii2-keycloak-app', // เพิ่มตรงนี้ให้ถูกต้อง
    'basePath' => dirname(__DIR__),
    'aliases' => [
        '@bower' => '@vendor/npm-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        // เพิ่ม cache component นี้
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',  // <-- สำคัญ ต้องมีเสมอ
            'enableAutoLogin' => false,
            'loginUrl' => ['site/login'],
        ],
        'request' => [
            'cookieValidationKey' => 'your-secure-cookie-key-here',
        ],
        'assetManager' => [
            'bundles' => [
                'yii\bootstrap\BootstrapAsset' => false,
                'yii\bootstrap\BootstrapPluginAsset' => false,
                'yii\web\JqueryAsset' => [
                    'sourcePath' => null,
                    'js' => ['https://code.jquery.com/jquery-3.7.1.min.js'],
                ],
                'yii\bootstrap5\BootstrapAsset' => [
                    'sourcePath' => null,
                    'css' => ['https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css'],
                ],
                'yii\bootstrap5\BootstrapPluginAsset' => [
                    'sourcePath' => null,
                    'js' => ['https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js'],
                ],
            ],
        ],
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
                'tceb-sso' => [
                    'class' => 'yii\authclient\OpenIdConnect',
                    'issuerUrl' => 'https://sso.tceb.or.th/realms/ab072973-334b-45e9-91f8-9bd6b1f060fc',
                    'clientId' => 'yii-client',
                    'clientSecret' => 'gAn4YaoKnlaZ6ZAmLkfllFFwml4qy9N9',
                    'name' => 'tceb-sso',
                    'title' => 'Login with TCEB SSO',
                    'validateJws' => true,
                    'returnUrl' => 'https://friendly-space-robot-9q5qr9xp5527gpx-8082.app.github.dev/index.php?r=site/auth&authclient=tceb-sso', // เพิ่มตรงนี้
                ],
            ],
        ],
    ],
];
