<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://api-maps.yandex.ru/2.1.78/?lang=ru_RU&amp;apikey=608bab7f-a651-42bd-840a-d1c0a9ea67ac" type="text/javascript"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <?php if (Yii::$app->controller->action->id == 'index' || Yii::$app->controller->action->id == 'view'): ?>
        <link rel="stylesheet" href="/admin/4D24A94C78C98DB9/demo7/bootstrap/css/bootstrap.min.css">

    <?php endif; ?>
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body   class="alt-menu sidebar-noneoverflow">
<?php $this->beginBody() ?>

<?php if(!Yii::$app->user->isGuest){echo $this->render('header/_header');}?>
    <?= Alert::widget() ?>
    <?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
