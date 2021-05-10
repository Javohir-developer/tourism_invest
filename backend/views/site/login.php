<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
//$this->params['breadcrumbs'][] = $this->title;
?>

<div class="login-wrapper ">
    <!-- START Login Background Pic Wrapper-->
    <div class="bg-pic">
        <img src="<?= $this->getImageUrl('assets/img/login_bg.jpg')?>" data-src="<?= $this->getImageUrl('assets/img/login_bg.jpg')?>" alt="" class="lazy">
        <!-- START Background Caption-->
        <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
<!--            <h2 class="semi-bold text-white">-->
<!--                Pages make it easy to enjoy what matters the most in the life</h2>-->
            <p class="small">
                All work copyright of respective owner © 2018 OKS.
            </p>
        </div>
        <!-- END Background Caption-->
    </div>
    <!-- END Login Background Pic Wrapper-->
    <!-- START Login Right Container-->
    <div class="login-container bg-white">
        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
            <img src="<?=$this->getImageUrl('assets/img/logo_with_text.png')?>" alt="logo" data-src="<?=$this->getImageUrl('assets/img/logo_with_text.png')?>" data-src-retina="<?=$this->getImageUrl('assets/img/Sircle.png')?>" width="auto" height="40">
            <p class="p-t-35"> </p>
            <!-- START Login Form -->
            <?php $form = ActiveForm::begin([
                'id' => 'signin-form_id',
                'fieldConfig' => [
                    'options' => [
                        'class' => 'w-icon form-group'
                    ],

                ],
            ]); ?>
            <span class="fa fa-user signin-form-icon"></span>
            <?= $form->field($model, 'username', ['template' => '{input} {error} {hint}'])
                ->textInput([
                    'autofocus' => true,
                    'class' => 'input-lg form-control',
                    'placeholder' => 'Username'
                ])->label(false) ?>
            <span class="fa fa-lock signin-form-icon"></span>
            <?= $form->field($model, 'password', ['template' => '{input} {error} {hint}'])
                ->passwordInput([
                    'class' => 'input-lg form-control',
                    'placeholder' => 'Password'
                ])->label(false) ?>

            <?= $form->field($model, 'rememberMe')->checkbox() ?>

            <div class="form-actions">
                <?= Html::submitButton('SIGN IN', ['class' => 'btn btn-primary btn-cons m-t-10', 'name' => 'login-button']) ?>

            </div> <!-- / .form-actions -->

            <?php ActiveForm::end(); ?>
            <!--END Login Form-->
            <div class="pull-bottom sm-pull-bottom">
                <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
                    <div class="col-sm-3 col-md-2 no-padding">
                        <img alt="" class="m-t-5" data-src="<?=$this->getImageUrl('assets/img/Sircle.png')?>" data-src-retina="<?=$this->getImageUrl('assets/img/Sircle.png')?>" height="60" src="<?=$this->getImageUrl('assets/img/Sircle.png')?>" width="60">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Login Right Container-->
</div>

<script type="text/javascript">
    {
        $('#form-login').validate()
    })
</script>
