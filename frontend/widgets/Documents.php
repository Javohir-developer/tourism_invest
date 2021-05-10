<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 16.10.2018
 * Time: 16:51
 */

namespace frontend\widgets;

use common\models\Post;
use yii\base\Widget;

class Documents extends Widget {
    public function run()
    {
        $document = \common\models\Documents::find()->limit(6)->orderBy(['id'=>SORT_DESC])->all();
        return $this->render('documents',[
            'document'=>$document
        ]);
    }
}