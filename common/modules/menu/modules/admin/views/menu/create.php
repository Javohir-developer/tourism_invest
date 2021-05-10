<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\web\JsExpression;
use oks\categories\models\Categories;
use oks\filemanager\models\Files;
use oks\langs\widgets\LangsWidgets;
use dosamigos\selectize\SelectizeDropDownList;
use dosamigos\selectize\SelectizeTextInput;
use kartik\editable\Editable;
use kartik\daterange\DateRangePicker;

/* @var $this yii\web\View */
/* @var $model common\modules\menu\models\Menu */

$this->title = 'Create Menu';
$this->params['breadcrumbs'][] = ['label' => 'Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
echo LangsWidgets::widget();
?>
<div class="menu-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
