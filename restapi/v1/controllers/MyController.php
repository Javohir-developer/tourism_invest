<?php


namespace restapi\v1\controllers;


use yii\filters\AccessControl;
use yii\rest\Controller;
use yii\web\Response;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBearerAuth;



class MyController extends Controller
{

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors['formats'] = [
            'class'=>'yii\filters\ContentNegotiator',
            'only'=>['index', 'view'],
            'formats'=>[
                'application/json'=>Response::FORMAT_JSON,
            ],
        ];

        $behaviors['access'] =
            [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index', 'view'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['create', 'update'],
                        'roles' => ['Moderator'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['delete'],
                        'roles' => ['Admin'],
                    ],
                ],

            ];

        $behaviors['corsFilter'] = ['class' => \yii\filters\Cors::className()];

        $behaviors['authenticator'] = [
            'only'=>['create', 'update', 'delete'],
            'class' => CompositeAuth::className(),
            'authMethods' => [
                HttpBearerAuth::className(),
            ],
        ];

        return $behaviors;

    }
}