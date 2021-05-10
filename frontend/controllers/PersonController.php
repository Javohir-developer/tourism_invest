<?php

namespace frontend\controllers;

use common\models\Person;
use common\models\PersonSearch;

class PersonController extends \yii\web\Controller
{
    public function actionIndex()
    {
		$searchModel = new PersonSearch();
		$dataProvider = $searchModel->search(\Yii::$app->request->getQueryParams(), Person::STATUS_ENABLED);
		$dataProvider->pagination->pageSize = 3;
        return $this->render('index', compact('dataProvider'));
    }

    public function actionView($id)
    {
        $model = $this->findModel($id);

        return $this->render('view', [
           'model' => $model
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Person::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
