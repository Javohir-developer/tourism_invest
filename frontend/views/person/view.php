<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 09.12.2018
 * Time: 20:13
 * @var $model \common\models\Person
 */

use yii\widgets\ActiveForm;

$this->title = __('Rahbariyat');
$type = $model->position;
?>
<div class="rector_single">
    <div class="bcontainer">
        <div class="wrapper">
            <div class="rector_single_frame">
                <h2 class="pages_top_title"><?=$this->title?></h2>
                <div class="user_info_block_news">
                    <?php $image = $model->allFiles('image')?>
                    <img src="<?=!empty($image) ? $image[0]->src('low') : ''?>" alt="">
                    <div class="user_info">
                        <div class="user_title">
                            <?=$model->position?>
                        </div>
                        <div class="user_name">
                            <?=$model->fullName?>
                        </div>
                        <div class="day_info">
                            <div class="reception">
                                <span><?= __('Qabul kunlari:')?></span>
                                <span><?=$model->reception?></span>
                            </div>
                            <div class="phone">
                                <span><?= __('Telefon:')?></span>
                                <span><?=$model->phone?></span>
                            </div>
                            <div class="email">
                                <span><?= __('E-mail:')?></span>
                                <span><?=$model->email?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="user_text">
                    <?=$model->duties?>
                </div>
                <div class="rector_singl_form">
                    <div class="form_title"><?=__('Мурожаат йуллаш')?></div>
                    <?php $model = new \common\models\Contact(); ?>
                    <?php $form = ActiveForm::begin([
                        'action' => '/site/contact',
                        'fieldConfig' => [
                            'options' => [
                                'tag' => false,
                            ],
                        ],
                    ]); ?>
                    <div style="display: none"><?=$form->field($model, 'type')->hiddenInput(['value' => $type])?></div>
                        <div class="user_name">
                            <div class="form_name_wrapper">
                                <div class="form_group">
                                    <?=$form->field($model, 'full_name')->textInput(['placeholder' => __('F.I.O')])->label(false)?>
                                </div>
                            </div>
                        </div>
                        <div class="user_phone">
                            <div class="form_phone_wrapper">
                                <div class="form_group">
                                    <?=$form->field($model, 'phone')->textInput(['placeholder' => __('Телефон')])->label(false)?>
                                </div>
                            </div>
                            <div class="form_phone_wrapper">
                                <div class="form_group">
                                    <?=$form->field($model, 'email')->textInput(['placeholder' => __('E-mail')])->label(false)?>
                                </div>
                            </div>
                        </div>
                        <div class="textaera">
                            <div class="form_textarea_wrapper">
                                <div class="form_group">
                                    <?=$form->field($model, 'message')->textarea(['placeholder' => __('Мурожаат максади')])->label(false)?>
                                </div>
                            </div>
                        </div>
                        <div class="frame_link">
                            <button class="link"><span><?=__('Ёзилиш')?></span></button>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
            <?=\frontend\widgets\Post_sidebar::widget()?>
        </div>
    </div>
</div>
