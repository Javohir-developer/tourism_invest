<?php

namespace frontend\controllers;

use common\models\Invest;
use yii\web\NotFoundHttpException;

class InvestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $invest = Invest::find()->all();
        return $this->render('index', ['invest'=> $invest]);
    }



    public function actionViews($latitude, $longitude)
    {

        return $this->render('views', [
            'latitude' => $latitude,
            'longitude' => $longitude,
        ]);


    }


    protected function findModel($id)
    {
        if (($model = Invest::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
