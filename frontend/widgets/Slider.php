<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 16.10.2018
 * Time: 16:51
 */

namespace frontend\widgets;

use yii\base\Widget;

class Slider extends Widget {
    public function run()
    {
        $sliders = \common\models\Slider::getAllSliders(4, \common\models\Slider::TYPE_PORTAL);
        return $this->render('slider', compact('sliders'));
    }
}