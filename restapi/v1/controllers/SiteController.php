<?php


namespace restapi\v1\controllers;
use restapi\models\LoginForm;
use yii\base\BaseObject;
use yii\rest\Controller;
use yii\data\ActiveDataProvider;
class SiteController extends Controller
{
    public function actionLogin(){
        $model = new LoginForm();
        if($model->load(\Yii::$app->request->post(), '') && ($token = $model->login())){
            return ['token'=>$token];
        }else{
            return new ActiveDataProvider([
                'query' => $model
            ]);
        }
    }
}