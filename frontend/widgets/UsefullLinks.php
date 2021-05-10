<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 16.10.2018
 * Time: 16:43
 */
namespace frontend\widgets;

use oks\langs\components\Lang;
use yii\base\Widget;

class UsefullLinks extends Widget {
    public function run()
    {
        $usefuls = \common\models\UsefullLinks::getUsefulLinks(6);
        $partners = \common\models\UsefullLinks::getPartners(4);

        return $this->render('usefull-links', [
            'usefuls' => $usefuls,
            'partners' => $partners
        ]);
    }
}
