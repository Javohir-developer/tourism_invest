
<?php

use yii\helpers\StringHelper;
use yii\helpers\Url;

$lang = Yii::$app->language;
$url = $_SERVER['REQUEST_URI'];
if ($lang == 'ru' || $lang == 'en'){
    $url2 = StringHelper::byteSubstr($url,3,100);
}else{
    $url2 = StringHelper::byteSubstr($url,0,100);
}
?>
<!-- Document Wrapper
============================================= -->
<style>

    @media only screen and (max-width: 991px) {
        .language1 {
            display: none

        }
    }

    @media only screen and (min-width: 991px) {
        .language2 {
            display: none

        }
    }
</style>
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header">
        <div id="header-wrap">
            <div class="container">
                <div class="header-row justify-content-between">

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="/" class="standard-logo" data-dark-logo="images/logo-side-dark.png" data-mobile-logo="<?= Url::to(['../canvas/images/logo_PR.png'])?>"><img src="<?= Url::to(['../canvas/images/logo_PR.png'])?>" alt="Canvas Logo"></a>
                        <a href="/" class="retina-logo" data-dark-logo="images/logo-side-dark@2x.png" data-mobile-logo="<?= Url::to(['../canvas/images/logo_PR.png'])?>"><img src="<?= Url::to(['../canvas/images/logo_PR.png'])?>" alt="Canvas Logo"></a>
                    </div><!-- #logo end -->

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <div class="header-misc">
                        <nav class="primary-menu on-click language1">
                            <ul class="menu-container">
                                <li class="menu-item"><a class="menu-link" href="#"><div><i class="icon-globe"></i><?= \Yii::t('app', "Tilni o'zgartirish")?></div></a>
                                    <ul class="sub-menu-container">
                                        <li class="menu-item"><a class="menu-link" href="<?= Url::to([$url2, 'language' => 'uz']); ?>"><div><?= \Yii::t('app', "O'ZBEK")?></div></a></li>
                                        <li class="menu-item"><a class="menu-link" href="<?= Url::to([$url2, 'language' => 'en']); ?>"><div><?= \Yii::t('app', "English")?></div></a></li>
                                        <li class="menu-item"><a class="menu-link" href="<?= Url::to([$url2, 'language' => 'ru']); ?>"><div><?= \Yii::t('app', "РУССКИЙ")?></div></a></li>
                                    </ul>
                                </li>
                            </ul>

                        </nav>
                    </div>

                    <!-- Primary Navigation ============================================= -->
                    <nav class="primary-menu on-click">

                        <ul class="menu-container">
                            <li class="menu-item"><a class="menu-link" href="<?= Url::to(['/'])?>"><div><i class="icon-home"></i><?= \Yii::t('app', 'Bosh sahifa')?></div></a></li>
                            <li class="menu-item"><a class="menu-link" href="<?= Url::to(['/news'])?>"><div><i class="icon-bell"></i><?= \Yii::t('app', 'Yangiliklar')?></div></a></li>
                            <li class="menu-item"><a class="menu-link" href="<?= Url::to(['/invest'])?>"><div><i class="icon-tasks"></i><?= \Yii::t('app', 'Reyestr')?></div></a></li>
                            <li class="menu-item"><a class="menu-link" href="<?= Url::to(['/maps'])?>"><div><i class="icon-map-marker2"></i><?= \Yii::t('app', 'Harita')?></div></a></li>
                            <li class="menu-item"><a class="menu-link" href="<?= Url::to(['/contacts'])?>"><div><i class="icon-rocket"></i><?= \Yii::t('app', "Bog‘lanish")?></div></a>
                            <li class="menu-item language2"><a class="menu-link" href="#"><div><i class="icon-globe"></i><?= \Yii::t('app', "Tilni o'zgartirish")?></div></a>
                                <ul class="sub-menu-container">
                                    <li class="menu-item"><a class="menu-link" href="<?= Url::to([$url2, 'language' => 'uz']); ?>"><div><?= \Yii::t('app', "O'ZBEK")?></div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="<?= Url::to([$url2, 'language' => 'en']); ?>"><div><?= \Yii::t('app', "English")?></div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="<?= Url::to([$url2, 'language' => 'ru']); ?>"><div><?= \Yii::t('app', "РУССКИЙ")?></div></a></li>
                                </ul>
                            </li>
                        </ul>

                    </nav>

                </div>
            </div>
        </div>
        <div class="header-wrap-clone"></div>
    </header><!-- #header end -->

