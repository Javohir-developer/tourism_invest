<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 16.10.2018
 * Time: 16:43
 */
namespace finance\widgets;

use oks\langs\components\Lang;
use yii\base\Widget;

class UsefullLinks extends Widget {
    public function run()
    {
        $links = \common\models\UsefullLinks::find()->where(['status' => 1, 'lang' => Lang::getLangId()])->limit(12)->all();
        return $this->render('usefull-links', [
            'links' => $links
        ]);
    }
}
