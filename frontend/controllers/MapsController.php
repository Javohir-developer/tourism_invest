<?php

namespace frontend\controllers;
use common\models\Invest;
use common\models\Viddet;

class MapsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = Invest::find()->all();
        $vis_det = Viddet::find()->all();
        return $this->render('index', ['model'=>$model, 'vid_det'=>$vis_det]);
    }

}
