<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 22.10.2018
 * Time: 23:09
 */

namespace backend\assets;


use yii\web\AssetBundle;

class CategoriesAsset extends AssetBundle {

    public $sourcePath = '@backend/assets';

    public $js = [
        'admin/javascripts/categories.js'
    ];

}