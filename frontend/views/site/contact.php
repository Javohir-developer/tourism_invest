<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use common\modules\settings\models\Settings;
use yii\widgets\ActiveForm;
$type = 'Contact';
$this->title = 'Contact';
?>
<div class="contact">
    <div class="bcontainer">
        <div class="contact_wrapper">
            <h2 class="pages_top_title"><?=$this->title?></h2>
            <div class="contat_info_block">
                <div class="contact_info">
                    <div class="info_wrap">
                        <div class="frame">
                            <h2><?=__('Manzil')?>:</h2>
                            <div class="info">
                                <div><?=Settings::value('adress')?></div>
                                <div><?=__('Индекс: 10002849')?></div>
                                <div><?=__('Мулжал:  Денов Хокимияти')?></div>
                            </div>
                        </div>
                    </div>
                    <div class="info_wrap">
                        <div class="frame">
                            <h2><?=__('Алока восталари')?>:</h2>
                            <div class="info">
                                <div class="phone">
                                    <div>Тел:</div>
                                    <div>
                                        <?=Settings::value('phone-number')?> <br>
                                        <?=Settings::value('phone-number2')?>
                                    </div>
                                </div>
                                <div><?=__('Факс')?>: <?=Settings::value('fax')?></div>
                                <div><?=__('Почта')?>: <?=Settings::value('email')?></div>
                                <div><?=__('Веб сайт: TerDU.uz')?></div>
                            </div>
                        </div>
                    </div>
                    <div class="info_wrap">
                        <div class="frame">
                            <h2><?=__('Иш кунлари')?>:</h2>
                            <div class="info">
                                <div><?=__('Душанба-Шанба')?></div>
                                <div><?=__('08:30 дан 16:00 гача')?></div>
                            </div>
                        </div>
                    </div>
                    <div class="info_wrap">
                        <div class="frame">
                            <h2><?=__('Реквизитлар')?>:</h2>
                            <div class="info">
                                <div><?=__('Молия вазирлиги ғазначилиги
                                    Ҳисоб рақами:
                                    23402000300100001010')?></div>
                                <div><?=__('МФО:00014')?></div>
                                <div><?=__('ИНН: 201122919')?></div>
                                <div><?=__('Марказий банк ХККМТермиз ш.')?></div>
                                <div><?=__('ИНН: 201504275')?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form_wrapper">
            <div class="left">
                <div class="left_title"><?=__('Мурожаат йуллаш')?>:</div>
                <?php $model = new \common\models\Contact(); ?>
                <?php $form = ActiveForm::begin([
                    'action' => '/site/contact',
                    'fieldConfig' => [
                        'options' => [
                            'tag' => false,
                        ],
                    ],
                ]); ?>
                    <div class="form_title"><?=__('Юлдузча курсатилган формалар тулдирилиши шарт')?></div>
                    <div class="form_block">
                        <div style="display: none"><?=$form->field($model, 'type')->hiddenInput(['value' => $type])?></div>
                        <div class="form_input">
                            <div class="form_block" style="width: 100%">
                                <?=$form->field($model, 'full_name')->textInput(['placeholder' => __('F.I.O')])->label(false)?>
                            </div>
                        </div>
                        <div class="form_input">
                            <div class="form_block">
                                <?=$form->field($model, 'phone')->textInput(['placeholder' => __('Телефон')])->label(false)?>
                            </div>
                            <div class="form_block">
                                <?=$form->field($model, 'email')->textInput(['placeholder' => __('E-mail')])->label(false)?>
                            </div>
                        </div>
                        <div class="form_textarea">
                            <?=$form->field($model, 'message')->textarea(['placeholder' => __('Матн учун жой')])->label(false)?>
                        </div>
                        <button class="link"><span><?=__('Юбориш')?></span></button>
                    </div>
                <?php ActiveForm::end(); ?>
            </div>
            <div class="right">
                <div class="right_title"><?=__('Юбориш')?>:</div>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3176.559583381956!2d67.2838167657673!3d37.234428729861435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa9327e0cb650584f!2z0KLQtdGA0LzQtdC30YHQutC40Lkg0JPQvtGB0YPQtNCw0YDRgdGC0LLQtdC90L3Ri9C5INCj0L3QuNCy0LXRgNGB0LjRgtC10YI!5e0!3m2!1sru!2s!4v1544426521487" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>