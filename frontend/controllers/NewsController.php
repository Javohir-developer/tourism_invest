<?php

namespace frontend\controllers;
use Yii;
use common\models\News;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;

class NewsController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $query = News::find()->where(['!=', 'name_'.Yii::$app->language, ''])->andWhere(['!=', 'images', ''])->orderBy(['id' => SORT_DESC]);
        $pagination = new Pagination([
            'defaultPageSize' => 6,
            'totalCount' => $query->count(),
        ]);
        $news = News::find()->where(['!=', 'name_'.Yii::$app->language, ''])->andWhere(['!=', 'images', ''])->orderBy(['id' => SORT_DESC])->offset($pagination->offset)->limit($pagination->limit)->all();

        return $this->render('index', [
            'pagination' => $pagination,
            'news' => $news
        ]);
    }

    public function actionView($id)
    {
        $model = $this->findModel($id);
        $model->view($id);
        return $this->render('view', [
            'model' => $model,
        ]);


    }

    public static function getCount(){
        return News::find()
            ->where(['!=', 'name_'.Yii::$app->language, ''])
            ->andWhere(['!=', 'images', ''])
            ->orderBy(['views' => SORT_DESC])->limit(4)->all();
    }

    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
