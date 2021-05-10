<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 16.10.2018
 * Time: 16:51
 */

namespace finance\widgets;

use common\models\PhotoGallery;
use common\models\Weather;
use yii\base\Widget;

class Post_sidebar extends Widget {

    public function run()
    {
        $banners = \common\models\Slider::getAllBanners(1);
        $weather = Weather::find()->orderBy(['id' => SORT_DESC])->one();
        return $this->render('post-sidebar', [
            'banners' => $banners,
            'weather' => $weather
        ]);
    }
}