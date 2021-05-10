<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 16.10.2018
 * Time: 16:51
 */

namespace frontend\widgets;

use common\models\Post;
use yii\base\Widget;

class Faq_Block extends Widget {
    public function run()
    {
        $posts = Post::getAllPosts();
        return $this->render('faq_block', [
            'posts' => $posts
        ]);
    }
}