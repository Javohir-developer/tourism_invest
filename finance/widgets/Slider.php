<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 16.10.2018
 * Time: 16:51
 */

namespace finance\widgets;

use yii\base\Widget;

class Slider extends Widget {
    public function run()
    {
        $sliders = \common\models\Slider::getAllSliders(4, \common\models\Slider::TYPE_CENTER);
        return $this->render('slider', compact('sliders'));
    }
}