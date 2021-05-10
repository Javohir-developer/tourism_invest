<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 16.10.2018
 * Time: 16:43
 */

namespace finance\widgets;

use common\models\PhotoGallery;
use common\models\VideoGallery;
use yii\base\Widget;

class Gallery extends Widget
{
    public function run()
    {
        $photos = PhotoGallery::getAllPhotos(9);
        $videos = VideoGallery::getAllVideos(1);
        return $this->render('gallery', [
            'photos' => $photos,
            'videos' => $videos,
        ]);
    }
}
