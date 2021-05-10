<?php

namespace finance\controllers;

use common\models\Pages;
use common\models\Person;
use common\models\PersonSearch;
use oks\langs\components\Lang;

class PersonController extends \yii\web\Controller
{
    public function actionIndex()
    {
		$searchModel = new PersonSearch();
		$dataProvider = $searchModel->search(\Yii::$app->request->getQueryParams(), Person::STATUS_ENABLED);
		$dataProvider->query->where(['type' => Person::TYPE_HEAD]);
		$dataProvider->pagination->pageSize = 5;
        return $this->render('index', compact('dataProvider'));
    }

    public function actionTeacher()
    {
        $searchModel = new PersonSearch();
        $dataProvider = $searchModel->search(\Yii::$app->request->getQueryParams(), Person::STATUS_ENABLED);
        $dataProvider->query->where(['type' => Person::TYPE_TEACHER]);
        $dataProvider->query->orderBy(['sort' => SORT_ASC]);
        $dataProvider->query->where(['status' => 1]);
        $dataProvider->query->where(['lang' => Lang::getLangId()]);
//        $dataProvider->pagination->pageSize = 5;
        return $this->render('teacher', compact('dataProvider'));
    }
    
    public function actionView($id)
    {
        $model = $this->findModel($id);
        if ($model->lang !== Lang::getLangId(\Yii::$app->language)) {
            $model = Person::find()
                ->andWhere(['lang' => Lang::getLangId(), 'lang_hash' => $model->lang_hash])
                ->one();
            if (!($model instanceof Person)) {
                return $this->redirect('/');
            }
        }

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
