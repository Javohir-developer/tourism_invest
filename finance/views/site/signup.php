<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use common\components\DatetimeHelper;
use yii\captcha\Captcha;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = Yii::t('main','Регистрация');
$this->params['breadcrumbs'][] = $this->title;

$days = DatetimeHelper::getCurrentMonthDays();
$months = DatetimeHelper::getMonths();
$years = DatetimeHelper::getYears();
?>
<section class="personal_cabinet_page personal_cabinet">
    <div class="Bcontainer">
        <h2><?=__('Регистрация')?></h2>
        <div class="main_container">
            <div class="left_block">
                <div class="tab_nav"><a href="#" class="tab_nav1 active"><?=__('Регистрация')?></a>
                </div>
                <div class="tab_content">
                    <div class="tab_pane1 registration_form">
                     <?php $form = ActiveForm::begin([
                         'id' => 'form-signup',
                         'options' => [
                             'fieldOptions' => [
                                 'template' => '{input}'
                             ]
                         ]
                     ]);
                     ?>
                            <div class="tt"><?=__('Фамилия')?></div>
                            <div class="form-group">
                                 <?= $form->field($model, 'surname')->input('surname',['placeholder' =>'Петров'])->label(false)?>
                            </div>
                            <div class="tt"><?=__('Имя')?></div>
                            <div class="form-group">
                                <?= $form->field($model, 'username',['options' => array('tag' => false), 'template' => '{input} {error}'])->input('username', ['placeholder' => 'Иван'])->label(false) ?>
                            </div>
                            <div class="tt"><?=__('Отчество')?></div>
                            <div class="form-group">
                                <?= $form->field($model, 'father_name',['options' => array('tag' => false), 'template' => '{input} {error}'])->input('father_name', ['placeholder' => 'Иванович'])->label(false) ?>
                            </div>
                            <div class="tt"><?=__('Электронная почта')?></div>
                            <div class="form-group">
                                <?= $form->field($model, 'email')->input('email', ['placeholder' => 'Email'])->label(false) ?>
                            </div>
                            <div class="tt"><?=__('Дата рождения')?></div>
                            <div class="form-group">
                                <div class="selects">
                                    <select name="SignupForm[day]" class="select_day">
                                        <?php foreach($days as $day): ?>
                                            <option value="<?=$day?>"><?=$day?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <select name="SignupForm[month]" class="select_month">
                                        <?php foreach($months as $key=>$month): ?>
                                            <option value="<?=$key?>"><?=$month?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <select name="SignupForm[year]" class="select_year">
                                        <?php foreach($years as $year): ?>
                                            <option value="<?=$year?>"><?=$year?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="tt"><?=__('Номер ИНН')?></div>
                            <div class="form-group">
                                <?= $form->field($model, 'inn')->input('inn',['placeholder'=>'598***489'])->label(false) ?>
                            </div>
                            <div class="tt"><?=__('Пароль')?></div>
                            <div class="form-group">
                                 <?= $form->field($model, 'password')->input('password',['placeholder'=>'**********','class' => 'p1'])->label(false)?>
                            </div>
                            <div class="tt"><?=__('Повторите пароль')?></div>
                            <div class="form-group">
                                <?= $form->field($model, 'password_repeat')->input('password',['placeholder'=>'**********','class' => 'p2'])->label(false) ?>
                                <div class="help-block2">пароль не совпадаеть</div>
                            </div>
                            <div class="tt"><?=__('Введите слово на картинке')?></div>
                            <div class="form-group">
                                <?= $form->field($model, 'captcha')->widget(\yii\captcha\Captcha::classname())->label(false) ?>
                            </div>
                            <div class="accept">
                                <?= $form->field($model, 'accept')->checkbox(['required' => true])->label(false) ?>
                                <p><?=__('Я подтверждаю, что предоставленные мной данные верные и корректные. Я понимаю ответственность за предоставление заведомо ложной информации или информации о третьих лицах согласно законодательству Республики Узбекистан')?></p>
                            </div>
                        <?= Html::submitButton(__('Зарегистрироваться'), ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>

                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
            <div class="right_block">
               <?= __('<div class="title">Личный кабинет оценщика помогает оптимизировать связь, ускорить получение необходимых документов и других услуг от Исполнительной дирекции для всех членов РОО</div><span>С помощью личного кабинета можно:</span>
                <ul>
                    <li>посмотреть историю платежей и текущую задолженность</li>
                    <li>напечатать квитанции для оплаты членских взносов</li>
                    <li>заказать рекомендательные письма (информационные выписки)</li>
                    <li>получать личные уведомления и анонсы планируемых мероприятий</li>
                </ul>
            </div>')?>
        </div>
    </div>
</section>






