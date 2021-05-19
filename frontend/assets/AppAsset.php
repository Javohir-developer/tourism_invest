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
        'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap',
        'canvas/css/bootstrap.css',
        'canvas/style.css',
        'canvas/css/dark.css',
        'canvas/css/font-icons.css',
        'canvas/css/animate.css',
        'canvas/css/magnific-popup.css',
        'canvas/css/custom.css',

    ];
    public $js = [
        'canvas/js/jquery.js',
        'canvas/js/plugins.min.js',
        'canvas/js/components/bs-datatable.js',
        'canvas/js/functions.js',
        'canvas/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
