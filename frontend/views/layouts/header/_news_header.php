<?php
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

$lang = Yii::$app->language;
?>
<section id="page-title">

    <div class="container clearfix">
        <h1><?=$this->params['titlebreadcrumbs']?></h1>
        <ol class="breadcrumb">
            <?php
            echo Breadcrumbs::widget([
                'homeLink' => ['label' => Yii::t('app', 'Bosh sahifa /'), 'url' => ['/']],
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]);
            ?>
        </ol>
    </div>

</section><!-- #page-title end -->