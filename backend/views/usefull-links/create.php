<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\UsefullLinks */

$this->title = 'Create Usefull Links';
$this->params['breadcrumbs'][] = ['label' => 'Usefull Links', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-create">
  <?php echo \oks\langs\widgets\LangsWidgets::widget(); ?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
