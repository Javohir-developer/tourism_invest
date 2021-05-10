<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 16.10.2018
 * Time: 16:43
 */
namespace frontend\widgets;

use common\models\Post;
use yii\base\Widget;

class AboutUs extends Widget {
    public function run()
    {
        $posts = Post::getOav();
        return $this->render('aboutUs', [
            'posts' => $posts
        ]);
    }
}
