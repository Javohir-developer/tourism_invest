<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 16.10.2018
 * Time: 16:51
 */

namespace finance\widgets;

use common\models\Post;
use yii\base\Widget;

class News extends Widget {
    public function run()
    {
        $posts = Post::getAllNews();
        $inboxs = Post::getAllInbox();
        $tenders = Post::getAllTenders();
        return $this->render('news', [
            'posts' => $posts,
//            'top_post' => $top_post,
            'inboxs' => $inboxs,
            'tenders' => $tenders
        ]);
    }
}