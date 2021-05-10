<?php

namespace common\modules\settings\modules\admin\controllers;

use common\modules\banners\models\Banners;
use common\modules\pages\models\Pages;
use common\modules\persons\models\Persons;
use common\modules\posts\models\Posts;
use common\modules\serials\models\Serials;
use common\modules\settings\models\Settings;
use common\modules\tvprojects\models\Tvprojects;
use Yii;
use yii\web\Controller;

/**
 * Default controller for the `settings` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        Settings::saveLisiner();
        return $this->render('index');
    }
    public function actionPosts(){
        Posts::generateFakePost();
        Posts::generateFakePost();
        Posts::generateFakePost();
        Posts::generateFakePost();
        Posts::generateFakePost();
        Posts::generateFakePost();
        Posts::generateFakePost();
    }
    public function actionPages(){
        Pages::generateFakePage();
        Pages::generateFakePage();
        Pages::generateFakePage();
        Pages::generateFakePage();
    }
    public function actionTvprojects(){
        Tvprojects::generateFakeTvproject();
        Tvprojects::generateFakeTvproject();
        Tvprojects::generateFakeTvproject();
        Tvprojects::generateFakeTvproject();
        Tvprojects::generateFakeTvproject();
        Tvprojects::generateFakeTvproject();
        Tvprojects::generateFakeTvproject();
        Tvprojects::generateFakeTvproject();
        Tvprojects::generateFakeTvproject();
        Tvprojects::generateFakeTvproject();
    }
    public function actionBanners(){
        Banners::generateFakeBanner();
        Banners::generateFakeBanner();
        Banners::generateFakeBanner();
        Banners::generateFakeBanner();
        Banners::generateFakeBanner();
    }
    public function actionPersons(){
        Persons::generateFakePerson(null,true);
        Persons::generateFakePerson();
        Persons::generateFakePerson(null,true);
        Persons::generateFakePerson();
        Persons::generateFakePerson(null,true);
        Persons::generateFakePerson();
        Persons::generateFakePerson(null,true);
        Persons::generateFakePerson();
        Persons::generateFakePerson(null,true);
        Persons::generateFakePerson();
    }
    public function actionSerials(){
        Serials::generateFakeSerial();
        Serials::generateFakeSerial();
        Serials::generateFakeSerial();
        Serials::generateFakeSerial();
        Serials::generateFakeSerial();
        Serials::generateFakeSerial();
        Serials::generateFakeSerial();
        Serials::generateFakeSerial();
        Serials::generateFakeSerial();
        Serials::generateFakeSerial();
    }
}
