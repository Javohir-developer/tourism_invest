<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 16.10.2018
 * Time: 16:43
 */
namespace frontend\widgets;

use common\models\PhotoGallery;
use common\models\VideoGallery;
use yii\base\Widget;

class Gallery extends Widget {
    public function run()
    {
        $photos = PhotoGallery::getAllPhotos(4, PhotoGallery::TYPE_PORTAL);
        $videos = VideoGallery::getAllVideos(4, VideoGallery::TYPE_PORTAL);
        return $this->render('gallery', [
            'photos' => $photos,
            'videos' => $videos,
        ]);
    }
}
