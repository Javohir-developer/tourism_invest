<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 16.10.2018
 * Time: 16:51
 */

namespace finance\widgets;

use common\models\Post;
use common\models\RegionCourses;
use oks\langs\components\Lang;
use yii\base\Widget;

class Courses extends Widget
{
    public function run()
    {
        $courses = RegionCourses::find()->where(['lang' => Lang::getLangId()])->all();
        return $this->render('courses',[
            'courses' => $courses
        ]);
    }
}