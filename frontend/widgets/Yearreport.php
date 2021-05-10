<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 16.10.2018
 * Time: 16:51
 */

namespace frontend\widgets;

use common\modules\currency\models\Currency;
use yii\base\Widget;

class Yearreport extends Widget {
    public function run()
    {
    	$kurs = Currency::getLastValues();
        return $this->render('yearreport', ['kurs' => $kurs]);
    }
}