<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
            'new_style/vendor/css/bundle.min.css',
            'new_style/vendor/css/jquery.fancybox.min.css',
            'new_style/vendor/css/owl.carousel.min.css',
            'new_style/vendor/css/swiper.min.css',
            'new_style/vendor/css/wow.css',
            'new_style/vendor/css/cubeportfolio.min.css',
            'new_style/showcase/css/animate.css',
            'new_style/vendor/css/LineIcons.min.css',
            'new_style/vendor/css/mediaelementplayer.min.css',
            'new_style/showcase/css/hover.css',
            'new_style/showcase/css/custom.css',
            'new_style/showcase/css/style.css',
            'new_style/showcase/css/styles.css',
    ];
    public $js = [
            'new_style/vendor/js/bundle.min.js',
            'new_style/vendor/js/jquery.fancybox.min.js',
            'new_style/vendor/js/owl.carousel.min.js',
            'new_style/vendor/js/swiper.min.js',
            'new_style/vendor/js/parallaxie.min.js',
            'new_style/vendor/js/wow.min.js',
            'new_style/vendor/js/jquery.cubeportfolio.min.js',
            'new_style/showcase/js/fancybox.js',
            'new_style/showcase/js/TweenMax.min.js',
            'https://maps.googleapis.com/maps/api/js?key=AIzaSyCJRG4KqGVNvAPY4UcVDLcLNXMXk2ktNfY',
            'new_style/showcase/js/map.js',
            'new_style/vendor/js/mediaelement-and-player.min.js',
            'new_style/showcase/js/script.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
