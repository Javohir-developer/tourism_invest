<?php
use common\models\Question;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this \yii\web\View */
/* @var $content string */

use finance\assets\AppAsset;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="header_bottom-hidden">
<?php $this->beginBody() ?>
    <div class="main_wrapper">

        <?= \finance\widgets\Header::widget()?>

        <?= $content ?>

        <?=\finance\widgets\Footer::widget()?>

    </div>
<?php $this->endBody() ?>
<?php
$session = \Yii::$app->session;
$flashMessage = $session->getAllFlashes();
if (!empty($flashMessage)) :
    foreach ($flashMessage as $key => $message) : ?>
        <script type="text/javascript">
        $(document).ready(function(){
            swal({
                text: "<?=$message?>",
                type: "<?=$key?>"
            });
        });
    </script>
    <?php endforeach; endif; ?>
</body>
</html>
<?php $this->endPage() ?>
