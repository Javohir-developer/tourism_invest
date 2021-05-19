<?php

namespace frontend\controllers;

use common\models\Contacts;
use Yii;

class ContactsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new Contacts();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->refresh();
        }
        return $this->render('index', [
            'model' => $model,
        ]);
    }

}
