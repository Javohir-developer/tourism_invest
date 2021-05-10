<?php

use yii\helpers\Html;
use oks\langs\widgets\LangsWidgets;


/* @var $this yii\web\View */
/* @var $model common\models\Person */
/* @var $region \common\models\Region */

$this->title = 'Create Person';
$this->params['breadcrumbs'][] = ['label' => 'People', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="person-create">
	<?php echo LangsWidgets::widget(); ?>

    <?= $this->render('_form', [
        'model' => $model,
		'region' => $region,
    ]) ?>

</div>
