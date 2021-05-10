<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 16.10.2018
 * Time: 16:51
 */

namespace frontend\widgets;

use common\models\Post;
use oks\categories\models\Categories;
use oks\langs\components\Lang;
use yii\base\Widget;

class News extends Widget {
    public function run()
    {
        $posts = Post::getNews(3, 'news');
        $price_news = Post::getAllPrice(5);
        $top_post = Post::getTopPosts(1);
        $category = Categories::find()->where(['lang' => Lang::getLangId(), 'slug' => 'price'])->asArray()->one()->name;
        return $this->render('news', [
            'posts' => $posts,
            'top_post' => $top_post,
            'price_news' => $price_news,
            'category' => $category
        ]);
    }
}