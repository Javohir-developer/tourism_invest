<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<body class="page-<?=substr($code, 0, 1) == 4 ? '404' : '500' . getenv('YII_ENV')?>">

<script>var init = [];</script>

<div class="header">
    <a href="index.html" class="logo">
        <div class="demo-logo"><img src="assets/demo/logo-big.png" alt="" style="margin-top: -4px;"></div>&nbsp;
        <strong>Pixel</strong>Admin
    </a> <!-- / .logo -->
</div> <!-- / .header -->

<div class="error-code"><?=$code?></div>

<div class="error-text">
    <span class="oops">OOPS! <?= Html::encode($this->title) ?></span><br>
    <span class="hr"></span>
    <br>
    <?= nl2br(Html::encode($message)) ?>
</div> <!-- / .error-text -->

<form action="" class="search-form">
    <input type="text" class="search-input" name="s">
    <input type="submit" value="SEARCH" class="search-btn">
</form> <!-- / .search-form -->

<!-- Get jQuery from Google CDN -->
<!--[if !IE]> -->
<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js">'+"<"+"/script>"); </script>
<!-- <![endif]-->
<!--[if lte IE 9]>
<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">'+"<"+"/script>"); </script>
<![endif]-->


<!-- Pixel Admin's javascripts -->
<script src="assets/javascripts/bootstrap.min.js"></script>
<script src="assets/javascripts/pixel-admin.min.js"></script>

<script type="text/javascript">
    init.push(function () {
        // Javascript code here
    })
    window.PixelAdmin.start(init);
</script>

</body>
