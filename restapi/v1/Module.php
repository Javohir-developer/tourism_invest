<?php


namespace restapi\v1;

use common\models\User;
use yii\filters\AccessControl;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\rest\UrlRule;

/**
 * v1 module definition class
 */
class Module extends \yii\base\Module
{
    public static $urlRules = [
        [
            'class' => 'yii\rest\UrlRule',
            'controller' => 'v1/menu',
            'extraPatterns' => [
                'OPTIONS <action>' => 'options',
            ],
        ],

        [
            'class' => '\yii\rest\UrlRule',
            'controller' => 'v1/user',
            'extraPatterns' => [
                'OPTIONS <action>' => 'options',

                'POST sign-in-phone' => 'sign-in-phone',
                'OPTIONS sign-in-phone' => 'options',

                'GET,HEAD get-me' => 'get-me',
                'OPTIONS get-me' => 'options',

                'POST,HEAD confirm' => 'confirm',
                'OPTIONS confirm' => 'options',

                'POST,HEAD logout' => 'logout',
                'OPTIONS sign-in-profile' => 'logout',

            ],
            'pluralize' => false,
        ],
        [
            'class' => '\yii\rest\UrlRule',
            'controller' => 'v1/admin/user',
            'pluralize' => false,
            'extraPatterns' => [
                'OPTIONS <action>' => 'options',

                'GET,HEAD get-me' => 'get-me',
                'OPTIONS get-me' => 'options',

                'POST sign-in' => 'sign-in',
                'POST,HEAD logout' => 'logout',
            ],
        ],
        [
            'class' => 'yii\rest\UrlRule',
            'controller' => 'v1/post',
            'extraPatterns' => [
                'GET has-diseases' => 'has-diseases',
                'OPTIONS has-diseases' => 'options',

                'GET related/<id:[0-9]+>' => 'related',
                'OPTIONS related/<id:[0-9]+>' => 'options',

                'OPTIONS <action>' => 'options',
                'POST' => 'add',
                'GET,HEAD all-categories' => 'all-categories',

                'GET,HEAD category/<slug:\S+>' => 'category',
                'OPTIONS category/<slug:\S+>' => 'options',
                'GET,HEAD <slug:[a-z0-9_-]+>' => 'view',

                'PUT <slug:[a-z0-9_-]+>' => 'update',
                'OPTIONS <slug:[a-z0-9_-]+>' => 'options',

                'DELETE delete/<id:>' => 'delete-slug',
                'OPTIONS delete/<id:>' => 'options',
                'GET,HEAD relation/<tags:[a-z0-9_-]+>' => 'relation',
                'OPTIONS relation/<tags:[a-z0-9_-]+>' => 'options',



            ],
            'pluralize' => false,
        ],
        [
            'class' => 'yii\rest\UrlRule',
            'controller' => 'v1/admin/post',
            'pluralize' => false,
            'extraPatterns' => [
                'GET import' => 'import',
                'OPTIONS import' => 'options',
                'GET subject' => 'subject',
                'OPTIONS subject' => 'subject',
            ],
        ],
        [
            'class' => 'yii\rest\UrlRule',
            'controller' => 'v1/admin/tags',
            'pluralize' => false,
            'extraPatterns' => [

            ],
        ],


        [
            'class' => UrlRule::class,
            'controller' => 'v1/company',
            'pluralize' => false,
            'extraPatterns' => [
                'OPTIONS <action>' => 'options',
                'GET,HEAD all-categories' => 'all-categories',
                'POST,HEAD add-company' => 'add-company',

                'POST,HEAD <id:\d+>/message' => 'create-message',
                'GET,HEAD category-list' => 'category-list',

                'OPTIONS update/<id:[0-9]+>' => 'options',
                'POST update/<id:[0-9]+>' => 'update',

                'OPTIONS <id:\d+>/review' => 'options',
                'POST <id:\d+>/review' => 'review',
                'GET <id:\d+>/review' => 'get-reviews',

                'OPTIONS <id:\d+>/page' => 'options',
                'GET,POST <id:\d+>/page' => 'page',

                'GET clinic-types' => 'clinic-types',
                'OPTIONS clinic-types' => 'options',

                'GET education-types' => 'education-types',
                'OPTIONS education-types' => 'options',
            ],
        ],
        [
            'class' => UrlRule::class,
            'controller' => 'v1/review',
            'pluralize' => false,
            'extraPatterns' => [
                'OPTIONS <action>' => 'options',
                'DELETE,HEAD delete/<id:[0-9]+>' => 'delete',
                'OPTIONS delete/<id:[0-9]+>' => 'options',
                'PUT,HEAD update/<id:[0-9]+>' => 'update',
                'OPTIONS update/<id:[0-9]+>' => 'options',
            ],
        ],

        [
            'class' => UrlRule::class,
            'controller' => 'v1/admin/resume',
            'pluralize' => false,
            'extraPatterns' => [

            ],
        ],
        [
            'class' => 'yii\rest\UrlRule',
            'controller' => 'v1/filemanager',
            'pluralize' => false,
            'extraPatterns' => [
                'POST uploads' => 'uploads',
                'OPTIONS uploads' => 'options',

                'POST file-upload' => 'file-upload',
                'OPTIONS file-upload' => 'options'
            ]
        ],
        [
            'class' => UrlRule::class,
            'controller' => 'v1/vacation',
            'pluralize' => false,
            'extraPatterns' => [
                'OPTIONS <action>' => 'options',
                'POST,HEAD create' => 'create',

                'GET,HEAD profile-list' => 'profile-list',

                'GET update/<id:>' => 'update',
                'POST count-view/<id:>' => 'count-view',
                'OPTIONS count-view/<id:>' => 'count-view',
//                'POST update/<id:[0-9]+>' => 'update',
//                'OPTIONS update/<id:>' => 'options',

                'GET my' => 'my',
                'OPTIONS my' => 'options',

                'DELETE,HEAD delete/<id:[0-9]+>' => 'delete',
                'OPTIONS delete/<id:[0-9]+>' => 'options',

                'GET,HEAD <id:[0-9]+>/phone' => 'phone',
                'OPTIONS <id:[0-9]+>/phone' => 'options',

                'POST <id:\d+>/send-msg' => 'send-msg',
                'OPTIONS <id:\d+>/send-msg' => 'options',
            ],
        ],
        [
            'class' => 'yii\rest\UrlRule',
            'controller' => 'v1/admin/vacation',
            'pluralize' => false,
            'extraPatterns' => array(

            )
        ],

        [
            'class' => UrlRule::class,
            'controller' => 'v1/categories',
            'pluralize' => false,
            'extraPatterns' => [

            ],
        ],
        [
            'class' => UrlRule::class,
            'controller' => 'v1/product',
            'pluralize' => false,
            'extraPatterns' => [
                'OPTIONS <action>' => 'options',
                'PUT update/<id:[0-9]+>' => 'update',
                'OPTIONS update/<id:[0-9]+>' => 'options',

                'DELETE,HEAD delete/<id:[0-9]+>' => 'delete',
                'OPTIONS delete/<id:[0-9]+>' => 'options',
                'POST,HEAD create' => 'create',
                'POST,HEAD file' => 'add-file',
                'DELETE file/<id:\d+>' => 'del-file',
                'OPTIONS file/<id:\d+>' => 'options',
                'GET,HEAD <id:[0-9]+>/phone' => 'phone',
                'OPTIONS <id:[0-9]+>/phone' => 'options',
                'OPTIONS category/<slug:\d+>' => 'options',
                'GET,HEAD category/<slug:\d+>' => 'category',
                'POST <id:\d+>/send-msg' => 'send-msg',
                'OPTIONS <id:\d+>/send-msg' => 'options',
                'GET,HEAD category-list' => 'category-list',
                'OPTIONS category-list' => 'options',
            ],
        ],
        [
            'class' => UrlRule::class,
            'controller' => 'v1/favorite',
            'pluralize' => false,
            'extraPatterns' => [
                'OPTIONS <action>' => 'options',
                'POST,HEAD add-product/<id:[0-9]+>' => 'add-product',
                'OPTIONS add-product/<id:[0-9]+>' => 'options',
                'POST,HEAD add-vacation/<id:[0-9]+>' => 'add-vacation',
                'OPTIONS add-vacation/<id:[0-9]+>' => 'options',
                'OPTIONS delete/<entity:\w+>/<id:\d+>' => 'options',
                'DELETE delete/<entity:\w+>/<id:\d+>' => 'delete',
            ],
        ],

        [
            'class' => 'yii\rest\UrlRule',
            'controller' => 'v1/admin/settings',
            'pluralize' => false,
            'extraPatterns' => array(

            )
        ],

        [
            'class' => UrlRule::class,
            'controller' => 'v1/encyclopedia',
            'pluralize' => false,
            'extraPatterns' => [
                'OPTIONS <action>' => 'options',
                'GET,HEAD' => 'index',
                'POST' => 'add',
                'GET,HEAD categories' => 'categories',
                'GET,HEAD category/<id:\d+>' => 'category',
                'GET,HEAD category-list' => 'category-list',
                'GET,HEAD <letter:\w>' => 'letter',
                'OPTIONS <letter:\w>' => 'options',
                'GET,HEAD test/<slug:\S+>' => 'test',
                'GET <letter:\w>/<slug:\S+>' => 'view',
                'OPTIONS <letter:\w>/<slug:\S+>' => 'options',
            ],
        ],
        [
            'class' => '\yii\rest\UrlRule',
            'controller' => 'v1/default',
            'extraPatterns' => [
                'GET index' => 'index',

                'OPTIONS <action>' => 'options',
                'GET,HEAD search' => 'search',
                'GET regions' => 'regions',
                'OPTIONS regions' => 'options',
                'GET cities' => 'cities',
                'OPTIONS cities' => 'options',

                'GET,HEAD translations/<lang:\w+>/<category:\w+>' => 'translations',
                'POST translations/<lang:\w+>/<category:\w+>' => 'add-translation',
                'OPTIONS translations/<lang:\w+>/<category:\w+>' => 'options',
            ],
        ],
        array(
            'class' => 'yii\rest\UrlRule',
            'controller' => 'v1/main',
            'pluralize' => false,
            'extraPatterns' => array(
                'GET index' => 'index',

                'GET,HEAD translations/<lang:\w+>/<category:\w+>' => 'translations',
                'POST translations/<lang:\w+>/<category:\w+>' => 'add-translation',
                'OPTIONS translations/<lang:\w+>/<category:\w+>' => 'options',

                'POST files' => 'file-upload',
                'OPTIONS files' => 'options',

                'GET,HEAD list/<category:\w+>' => 'get-translations',
                'POST list/<category:\w+>' => 'message-translate',
                'OPTIONS list/<category:\w+>' => 'options',
            ),
        ),
        [
            'class' => '\yii\rest\UrlRule',
            'controller' => 'v1/search',
            'pluralize' => false,
            'extraPatterns' => [
                'OPTIONS <action>' => 'options',
                'GET,HEAD' => 'index',
                'GET,HEAD resume' => 'resume',
                'GET,HEAD vacation' => 'vacation',
                'GET,HEAD company' => 'company',
                'GET,HEAD product' => 'product',
            ],
        ],


    ];

    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'restapi\v1\controllers';

    /**
     * {@inheritdoc}
     */
//    public function init()
//    {
//        error_reporting(2215);
//        parent::init();
//
//    }

//    public function behaviors()
//    {
//        return ArrayHelper::merge(parent::behaviors(), [
//            'corsFilter' => [
//                'class' => Cors::class,
//                'cors' => [
//                    'Origin' => static::allowedDomains(),
//                    'Access-Control-Request-Method' => ['*'],
//                    'Access-Control-Max-Age' => 3600,
//                    'Access-Control-Request-Headers' => ['*'],
//                    'Access-Control-Expose-Headers' => ['*']
//                ],
//            ],
//            'authenticator' => [
//                'class' => CompositeAuth::class,
//                'except' => [
//                    'search/*',
//                    'product/index',
//                    'post/*',
//                ],
//                'authMethods' => [
//                    HttpBearerAuth::class,
//                ],
//            ],
//        ]);
//    }

//    public static function allowedDomains()
//    {
//        return [
//            '*',
//        ];
//    }
}
