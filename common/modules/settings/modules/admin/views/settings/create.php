<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\web\JsExpression;
use oks\categories\models\Categories;
use oks\filemanager\models\Files;
use oks\langs\widgets\LangsWidgets;
use kartik\editable\Editable;
use kartik\daterange\DateRangePicker;

/* @var $this yii\web\View */
/* @var $model common\modules\settings\models\Settings */

$this->title = 'Create Settings';
$this->params['breadcrumbs'][] = ['label' => 'Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
echo LangsWidgets::widget();
?>
<div class="settings-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
