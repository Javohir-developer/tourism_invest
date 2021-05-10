<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\VideoGallery */

$this->title = 'Create Video Gallery';
$this->params['breadcrumbs'][] = ['label' => 'Video Galleries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-gallery-create">

    <?php echo \oks\langs\widgets\LangsWidgets::widget(); ?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
