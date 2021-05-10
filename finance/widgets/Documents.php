<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 16.10.2018
 * Time: 16:51
 */

namespace finance\widgets;

use common\models\Post;
use oks\categories\models\Categories;
use oks\langs\components\Lang;
use yii\base\Widget;

class Documents extends Widget {
    public function run()
    {
        $category_id = Categories::find()->where(['lang' => Lang::getLangId(), 'slug' => 'government'])->asArray()->one();
        $model = Post::find()->where(['like', 'category', $category_id['id']])->andWhere(['status' => Post::STATUS_ENABLED])->orderBy(['id' => rand()])->limit(1)->one();;
        return $this->render('documents',[
            'model' => $model
        ]);
    }
}