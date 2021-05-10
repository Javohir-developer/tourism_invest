<?php

namespace backend\widgets;

use yii\base\Widget;

class TopBar extends Widget {

    public function run()
    {

        return $this->render('topBar');
    }

}