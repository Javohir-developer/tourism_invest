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

class Info extends Widget {

    public function run()
    {
        $uzasbo = Post::getUzAsbo();
        $buy = Post::getBuys();
        return $this->render('info', [
            'uzasbo' => $uzasbo,
            'buy' => $buy
        ]);
    }
}