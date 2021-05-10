<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 16.10.2018
 * Time: 16:43
 */
namespace finance\widgets;

use common\models\Person;
use common\models\Post;
use oks\langs\components\Lang;
use oks\langs\models\Langs;
use yii\base\Widget;

class AboutUs extends Widget {
    public function run()
    {
        $persons = Person::find()->where(['status' => 1, 'lang' => Lang::getLangId(), 'type' => 1])->all();
        return $this->render('aboutUs', [
            'persons' => $persons
        ]);
    }
}
