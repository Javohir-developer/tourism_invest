<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [

        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        'db' => [
            'class' => 'yii\db\Connection',
            'dsn'      => getenv( 'DB_DSN' ),
            'username' => getenv( 'DB_USERNAME' ),
            'password' => getenv( 'DB_PASSWORD' ),
            'charset' => 'utf8',
        ],
        'library_db' => [
            'class' => 'yii\db\Connection',
            'dsn'      => 'pgsql:host=178.218.207.74;dbname=minfin',
            'username' => 'minfin',
            'password' => 'minfinPassword',
            'charset' => 'utf8',
        ],
        'viewUrl' => [
            'class'           => 'yii\web\urlManager',
            'baseUrl'         => getenv('FRONTEND_URL'),
            'enablePrettyUrl' => true,
            'showScriptName'  => false,
        ],
        'i18n' => [
            'translations' => [
                'main' => [
                    'class'                 => 'yii\i18n\DbMessageSource',
                    'forceTranslation'      => true,
                    'enableCaching'         => true,
                    'cachingDuration'       => 3600,
                    'sourceLanguage'        => 'uz-UZ',
                    'sourceMessageTable'    => '_system_message',
                    'messageTable'          => '_system_message_translation',
                    'on missingTranslation' => [
                        'common\components\EventHandlers',
                        'handleMissingTranslation',
                    ],
                ],
                'oks-categories' => [
                    'class'                 => 'yii\i18n\DbMessageSource',
                    'sourceMessageTable'    => '_system_message',
                    'messageTable'          => '_system_message_translation',
                ]
            ],
        ],

    ]
];

if(YII_ENV == YII_ENV_DEV){
    unset($config['components']['cache']);
}

return $config;
