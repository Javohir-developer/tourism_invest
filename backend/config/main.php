<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'layout' => 'admin',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'language'  => 'ru',
    'bootstrap' => ['log'], 
    'modules' => [
        'treemanager' =>  [
            'class' => '\kartik\tree\Module',
        ],
        'translations' => [
            'class' => 'common\modules\translations\modules\admin\Module'
        ],
        'settings' => [
            'class' => 'common\modules\settings\modules\admin\Module'
        ],
        'menu' => [
            'class' => 'common\modules\menu\modules\admin\Module'
        ],
    ],
    'controllerMap' => [
        'files' => 'oks\filemanager\controllers\FilesController',
        'categories' => 'oks\categories\controllers\CategoriesController',
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
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
            'showScriptName'  => false,
            'enablePrettyUrl' => true,
            'rules'           => [
                '<controller:\w+>/<id:\d+>'                                 => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id\d+>'                     => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>/<lang\d+>/<id\d+>/<hash\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>'                             => '<controller>/<action>',
            ],
        ],
        'assetManager' => [
            'linkAssets'        => true,
            'appendTimestamp'   => true,
        ],
        'view' => [
            'class' => 'backend\components\View',
        ],
        'categories' => [
            'class' => 'oks\categories\actions\CategoriesAction'
        ]
    ],
//    'on beforeAction' => function () {
//        oks\langs\components\Lang::onRequestHandler();
//        if (!\Yii::$app->user->isGuest) {
//            if(Yii::$app->user->identity->type !== \common\models\User::TYPE_ADMIN){
//                Yii::$app->user->logout();
//                return Yii::$app->getResponse()->redirect(getenv('FRONTEND_URL'))->send();
//            };
//        }
//
//    },
    'on beforeAction' => function () {
        oks\langs\components\Lang::onRequestHandler();
    },
    'as beforeRequest' => [  //if guest user access site so, redirect to login page.
        'class' => 'yii\filters\AccessControl',
        'rules' => [
            [
                'controllers' => ['site'],
                'actions' => ['login','logout'],
                'roles' => ['?','@'],
                'allow' => true,
            ],
            [
                'allow' => true,
                'roles' => ['@'],
            ],
        ],
    ],
    'params' => $params,
];
