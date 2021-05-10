<?php

namespace finance\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $sourcePath = '@app/assets/app';

    public $css = [
        'styles/vendor.css',
        'styles/main.css',
        ];
    public $js = [
        'scripts/vendor.min.js',
        'scripts/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
