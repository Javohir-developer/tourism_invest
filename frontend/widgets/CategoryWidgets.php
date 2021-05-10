<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 16.10.2018
 * Time: 16:43
 */
namespace frontend\widgets;

use common\modules\currency\models\Currency;
use oks\langs\models\Langs;
use yii\base\Widget;

class CategoryWidgets extends Widget {
    public function run()
    {
        $banners = \common\models\Slider::getAllBanners(2);
        return $this->render('categoryWidgets', [
            'banners' => $banners
        ]);
    }
}
