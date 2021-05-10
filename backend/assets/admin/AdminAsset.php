<?php

namespace backend\assets\admin;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AdminAsset extends AssetBundle
{
    public $sourcePath = '@backend/assets/admin';
    public $css = [
        'assets/plugins/pace/pace-theme-flash.css',
        'assets/plugins/font-awesome/css/font-awesome.css',
        'assets/plugins/jquery-scrollbar/jquery.scrollbar.css',
        'assets/plugins/switchery/css/switchery.min.css',
        'assets/plugins/nvd3/nv.d3.min.css',
        'assets/plugins/mapplic/css/mapplic.css',
        'assets/plugins/rickshaw/rickshaw.min.css',
        'assets/plugins/jquery-metrojs/MetroJs.css',
        'pages/css/pages-icons.css',
        'pages/css/pages.css',
    ];
    public $js = [
        "assets/plugins/pace/pace.min.js",
        "assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js",
        "assets/plugins/modernizr.custom.js",
        "assets/plugins/jquery/jquery-easy.js",
        "assets/plugins/jquery-unveil/jquery.unveil.min.js",
        "assets/plugins/jquery-bez/jquery.bez.min.js",
        "assets/plugins/jquery-ios-list/jquery.ioslist.min.js",
        "assets/plugins/jquery-actual/jquery.actual.min.js",
        "assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js",
        "assets/plugins/classie/classie.js",
        "assets/plugins/switchery/js/switchery.min.js",
        "assets/plugins/nvd3/lib/d3.v3.js",
        "assets/plugins/nvd3/nv.d3.min.js",
        "assets/plugins/nvd3/src/utils.js",
        "assets/plugins/nvd3/src/tooltip.js",
        "assets/plugins/nvd3/src/interactiveLayer.js",
        "assets/plugins/nvd3/src/models/axis.js",
        "assets/plugins/nvd3/src/models/line.js",
        "assets/plugins/nvd3/src/models/lineWithFocusChart.js",
        "assets/plugins/mapplic/js/hammer.js",
        "assets/plugins/mapplic/js/jquery.mousewheel.js",
        "assets/plugins/mapplic/js/mapplic.js",
        "assets/plugins/jquery-metrojs/MetroJs.min.js",
        "assets/plugins/jquery-sparkline/jquery.sparkline.min.js",
        "assets/plugins/skycons/skycons.js",
        "pages/js/pages.min.js",
        "assets/js/cyrtolat.js",
        "assets/js/translations.js",
        "assets/js/main.js",

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',


    ];
}


