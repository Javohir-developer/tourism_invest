<?php

use oks\langs\widgets\LangsWidgets;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\web\JsExpression;
use oks\categories\models\Categories;
use oks\filemanager\models\Files;
use dosamigos\selectize\SelectizeDropDownList;
use dosamigos\selectize\SelectizeTextInput;
use kartik\editable\Editable;
use kartik\daterange\DateRangePicker;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model common\modules\menu\models\Menu */

$this->title = 'Update Menu';
$this->params['breadcrumbs'][] = ['label' => 'Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->menu_id]];
$this->params['breadcrumbs'][] = 'Update';

echo LangsWidgets::widget(['model_db' => $model,'create_url' => '/menu/menu/create/']);
Pjax::begin();
?>
<div class="menu-update panel">


    <?= $this->render('_form', [
        'model' => $model,
        'menuItem' => $menuItem
    ]) ?>

</div>
<?php

$this->registerJs('query_handler();');
?>
<?php Pjax::end();?>