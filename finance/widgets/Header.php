<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 16.10.2018
 * Time: 16:43
 */
namespace finance\widgets;

use common\models\PostSearch;
use oks\langs\models\Langs;
use yii\base\Widget;

class Header extends Widget {
    public function run()
    {
        $langs = Langs::find()->where(['status' => 1])->all();
        return $this->render('header', [
            'langs' => $langs,
        ]);
    }
}
