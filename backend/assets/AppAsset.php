<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'demo7/assets/css/plugins.css',
        'demo7/assets/css/authentication/form-1.css',
        'demo7/plugins/apex/apexcharts.css',
        'demo7/assets/css/dashboard/dash_2.css',
        'demo7/assets/css/forms/theme-checkbox-radio.css',
        'demo7/assets/css/forms/switches.css',
    ];
    public $js = [
//        'demo7/assets/js/libs/jquery-3.1.1.min.js',
        'demo7/bootstrap/js/popper.min.js',
        'demo7/bootstrap/js/bootstrap.min.js',
        'demo7/plugins/perfect-scrollbar/perfect-scrollbar.min.js',
        'demo7/assets/js/app.js',
        'demo7/assets/js/main.js',
        'demo7/assets/js/custom.js',
        'demo7/plugins/apex/apexcharts.min.js',
        'demo7/assets/js/dashboard/dash_2.js',
        'demo7/assets/js/authentication/form-1.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
