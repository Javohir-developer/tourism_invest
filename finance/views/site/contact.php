<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */
/* @var $person \common\models\Person */

use common\modules\settings\models\Settings;
use yii\widgets\ActiveForm;
$type = 'Contact';
$this->title = 'Contact';
?>
<div class="contact_page_wrapper">
    <div class="bcontainer">
        <div class="contat_page_title">
            <?=__('Связатся с нами')?>
        </div>
        <div class="consultant_block_wrapper">
            <div class="consultant_title">
                <?=__('Если вы хотите получить информации о повышение
                квалификацию наше консультанты вам поможет')?>
            </div>
            <div class="consultant_block">
                <?php foreach ($persons as $person) : ?>
                    <div class="consultant">
                        <div class="img">
                            <?php if (count($person->image) > 0)
                                $image = $person->allFiles('image')[0]->src('low');?>
                            <img src="<?=$image?>" alt="">
                        </div>
                        <div class="text_block">
                            <div class="text_frame">
                                <div class="top">
                                    <div class="title"><?=$person->fullName?></div>
                                    <div class="subtitle"><?=$person->position?></div>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li class="top"><?=__('Телефон:')?></li>
                                        <li class="bottom"><?=$person->phone?></li>
                                    </ul>
                                    <ul>
                                        <li class="top"><?=__('Факс:')?></li>
                                        <li class="bottom"><?=$person->fax?></li>
                                    </ul>
                                    <ul>
                                        <li class="top"><?=__('E-mail:')?></li>
                                        <li class="bottom"><?=$person->email?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="contact_info_block_wrapper">
                <div class="contact_info_title"><?=__('Наше контакты')?></div>
                <div class="contact_info_block">
                    <div class="left">
                        <div class="item_wrapper">
                            <div class="item">
                                <div class="title"><?=__('Телефоны')?></div>
                                <div class="phone_number"><?=Settings::value('phone-number')?></div>
                                <div class="phone_number"><?=Settings::value('phone-number1')?></div>
                            </div>
                            <div class="item">
                                <div class="title">
                                    <?=__('Адресс')?>
                                </div>
                                <div class="address">
                                    <?=Settings::value('adress')?>
                                </div>
                            </div>
                            <!--<div class="item no_margin_bottom">
                                <div class="title"><?/*=__('В сети')*/?></div>
                                <div class="list_block">
                                    <ul class="list">
                                        <li>
                                            <a href="<?/*=Settings::value('instagram')*/?>">
                                                <img src="<?/*=$this->getImageUrl('img/vk_single.svg')*/?>" alt="">
                                                <span><?/*=Settings::value('instagram')*/?></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?/*=Settings::value('facebook-social')*/?>">
                                                <img src="<?/*=$this->getImageUrl('img/facebook_single.svg')*/?>" alt="">
                                                <span><?/*=Settings::value('facebook-social')*/?></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?/*=Settings::value('twitter-social')*/?>">
                                                <img src="<?/*=$this->getImageUrl('img/twitter_single.svg')*/?>" alt="">
                                                <span><?/*=Settings::value('twitter-social')*/?></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?/*=Settings::value('telegram-social')*/?>">
                                                <img src="<?/*=$this->getImageUrl('img/telegram_single.svg')*/?>" alt="">
                                                <span><?/*=Settings::value('telegram-social')*/?></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>-->
                            <div class="item no_margin_bottom">
                                <div class="title"><?=__('Транспорт')?></div>
                                <div class="address">
                                    <?=__('Автобус:')?>
                                </div>
                                <div class="address">
                                    <?=__('Метро:')?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="contact_map">
                            <?=Settings::value('1map')?>
                        </div>
                    </div>
                </div>
                <div class="contact_communication_wrapper">
                    <div class="communication_title">
                        <div class="title">
                            <?=__('Обрашение к руководству')?>
                        </div>
                        <div class="description">
                            <?=__('Отправить сообщение. Все поля, отмеченные звёздочкой,
                            являются обязательными.')?>
                        </div>
                    </div>
                </div>
                <div class="contact_form_block">
                    <?php $model = new \common\models\Contact(); ?>
                    <?php $form = ActiveForm::begin([
                        'action' => '/site/contact',
                        'fieldConfig' => [
                            'options' => [
                                'tag' => false,
                            ],
                        ],
                    ]); ?>
                    <div class="left_form">
                        <div style="display: none"><?=$form->field($model, 'type')->hiddenInput(['value' => $type])?></div>

                        <div class="contact_form_block">
                            <?=$form->field($model, 'full_name')->textInput(['placeholder' => __('F.I.O')])->label(false)?>
                        </div>
                        <div class="contact_form_block">
                            <?=$form->field($model, 'email')->textInput(['placeholder' => __('E-mail')])->label(false)?>
                        </div>
                        <div class="contact_form_block">
                            <?=$form->field($model, 'phone')->textInput(['placeholder' => __('Телефон')])->label(false)?>
                        </div>
                    </div>
                    <div class="right_form">
                        <div class="textarea_block">
                            <?=$form->field($model, 'message')->textarea(['placeholder' => __('Матн учун жой')])->label(false)?>
                        </div>
                    </div>
                    <div class="form_button">
                        <button class="link_btn"><?=__('Отпраить')?></button>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

