<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 08.05.2019
 * Time: 16:05
 */

namespace finance\controllers;

use common\models\LibraryBooks;
use common\models\LibraryCategory;
use yii\base\Controller;
use yii\data\ActiveDataProvider;

/**
 * Class LibraryController
 * @package finance\controllers
 */
class LibraryController extends Controller
{
    /**
     * @return string
     */
    public function actionCategory()
    {
        $models = LibraryCategory::find()->andWhere(['status' => 1])->all();

        return $this->render('category', [
            'models' => $models
        ]);
    }

    /**
     * @param null $id
     * @return string
     */
    public function actionBooks($id = null)
    {
        if ($id == null) {
            $id = \Yii::$app->request->getQueryParams()['id'];
        }
        $model = LibraryCategory::findOne($id);
        $query = $model->getBooks();

        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        return $this->render('books', [
            'dataProvider' => $dataProvider,
            'title' => $model->name
        ]);
    }
}