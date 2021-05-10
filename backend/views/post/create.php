<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Post */

$this->title = 'Create Post';
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <?php echo \oks\langs\widgets\LangsWidgets::widget(); ?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


