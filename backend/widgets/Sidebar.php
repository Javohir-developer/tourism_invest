<?php

namespace backend\widgets;

use common\models\Slider;
use yii\base\Widget;

class Sidebar extends Widget {

    public function run()
    {
        $quotes = Slider::getAllQuotes();
        return $this->render('sidebar', [
            'quotes' => $quotes
        ]);
    }

}