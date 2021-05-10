<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 23.10.2018
 * Time: 3:25
 */
namespace frontend\controllers;

use common\models\Pages;
use common\models\PagesSearch;
use oks\categories\models\Categories;
use yii\web\Controller;

class PagesController extends Controller
{
    public function actionList($slug = null)
    {
        $searchModel = new PagesSearch();
        $dataProvider = $searchModel->search(\Yii::$app->request->getQueryParams(), $slug);
        $dataProvider->pagination->pageSize = 8;

        if ($slug) {
            $title = Categories::find()->where(['slug' => $slug])->asArray()->one();
            $title = $title['name'];
        } else {
            $title = __('Sahifalar');
        }
        return $this->render('list', [
           'dataProvider' => $dataProvider,
            'title' => $title,
        ]);
    }

    public function actionView($slug)
    {
        $model = $this->findModel($slug);
        $model->updateCounters(['view' => 1]);
        return $this->render('view', [
            'model' => $model
        ]);
    }

    public function findModel($slug)
    {
        if (($model = Pages::find()->where(['slug' => $slug])->one()) !== null){
            return $model;

        } else {
            throw new \yii\web\NotFoundHttpException(__('The requested page does not exist'), 404);
        }
    }
}
