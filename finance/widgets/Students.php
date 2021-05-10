<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 16.10.2018
 * Time: 16:51
 */

namespace frontend\widgets;

use yii\base\Widget;

class Students extends Widget {
    public function run()
    {
        return $this->render('students');
    }
}