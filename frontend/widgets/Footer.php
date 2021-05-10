<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 16.10.2018
 * Time: 16:43
 */
namespace frontend\widgets;

use yii\base\Widget;

class Footer extends Widget {
    public function run()
    {
        return $this->render('footer');
    }
}
