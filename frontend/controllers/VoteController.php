<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 15.02.2019
 * Time: 13:53
 */

namespace frontend\controllers;


use common\models\VoteQuestionsSearch;
use yii\base\Controller;

class VoteController extends Controller
{
    public function actionIndex() {
        $searchModel = new VoteQuestionsSearch();
        $dataProvider = $searchModel->search(\Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize = 9;

        return $this->render('votes', [
           'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }

}