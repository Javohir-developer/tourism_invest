<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 16.10.2018
 * Time: 16:51
 */

namespace frontend\widgets;

use common\models\PhotoGallery;
use yii\base\Widget;

class Post_sidebar extends Widget {
    public function run()
    {
        $banners = \common\models\Slider::getAllBanners(2);
        return $this->render('post-sidebar', [
            'banners' => $banners
        ]);
    }
}