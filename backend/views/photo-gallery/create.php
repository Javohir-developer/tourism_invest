<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\PhotoGallery */

$this->title = 'Create Photo Gallery';
$this->params['breadcrumbs'][] = ['label' => 'Photo Galleries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photo-gallery-create">
    <?php echo \oks\langs\widgets\LangsWidgets::widget(); ?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
