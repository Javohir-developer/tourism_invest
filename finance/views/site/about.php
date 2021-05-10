<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
<div class="site-about">
    <div class="top">
        <div class="h2">
            <?= Html::encode($this->title) ?>
        </div>
        <div class="links">

            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
        </div>
    </div>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>
</div>