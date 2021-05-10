<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-finance',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'finance\controllers',
//    'language'  => 'uz',
    'modules' => [
        'treemanager' =>  [
            'class' => '\kartik\tree\Module',
        ],
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-finadasfnczcesd',

        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-finasadfnce', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-financezsadfgcsadfggfdsadfgzxcasdfg',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'class' => 'codemix\localeurls\UrlManager',
            'showScriptName'  => false,
            'enablePrettyUrl' => true,
            'rules'           => [
                '/'                                 => 'site/index',
                '<controller:\w+>/<id:\d+>'                                 => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id\d+>'                     => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>/<lang\d+>/<id\d+>/<hash\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>'                             => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>/<slug:\S+>'          => '<controller>/<action>',
            ],
            'languages' => ['uz', 'ru', 'oz'],
//			'ignoreLanguageUrlPatterns' => [
//				'#site/ajax#' => '#site/ajax#',
//                '#site/search#' => '#site/search#',
//				'#site/signup#' => '#site/signup#',
//			]

        ],
        'userCounter' => [
            'class' => 'finance\components\UserCounter',
            'tableUsers' => 'pcounter_users',
            'tableSave' => 'pcounter_save',
            'autoInstallTables' => true,
            'onlineTime' => 10,
        ],
        'assetManager' => [
            'forceCopy' => true,
//            'linkAssets'        => true,
            'appendTimestamp'   => true,
        ],
        'view' => [
            'class' => 'finance\components\View',
        ],

    ],
    'on beforeAction' => function () {
        oks\langs\components\Lang::onRequestHandler();
    },
    'params' => $params,
];
