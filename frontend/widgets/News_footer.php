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

class News_footer extends Widget {

    public function run()
    {
        $attentions = Post::getAttentions(1);
        $usefuls = Post::getUsefulPosts(4);

        return $this->render('news_footer', [
            'attentions' => $attentions,
            'usefuls' => $usefuls
        ]);
    }
}