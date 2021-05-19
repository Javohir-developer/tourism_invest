<?php

use common\models\City;
use common\models\Region;
use common\models\Viddet;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model common\models\Invest */
/* @var $form yii\widgets\ActiveForm */

$viddet = ArrayHelper::map(Viddet::find()->select(['id', 'value_uz'])->asArray()->all(), 'id', 'value_uz');
$listRegion = ArrayHelper::map(Region::find()->select(['id', 'name_ru'])->asArray()->all(), 'id', 'name_ru');
$listCity = ArrayHelper::map(City::find()->andWhere(['region_id'=> $model->region_id])->select(['id', 'name_ru'])->asArray()->all(), 'id', 'name_ru');



 ?>

?>
<style>
    .form-control {
        height: calc(10px + 19px + 8px) !important;
    }
    .widget.widget-one .w-chart .w-chart-section {

        background: #ffffff;
        padding: 0;
    }
    .form-group label, label {
        font-size: 15px;
        color: #4361ee;
        letter-spacing: 1px;
        font-weight: bold;
    }
    .form-group label, label {
        font-size: 14px;
    }
    .btn {
        white-space: inherit;
    }
    .input-group>.custom-file, .input-group>.custom-select, .input-group>.form-control, .input-group>.form-control-plaintext {
        flex: .7 1 auto;
    }

    .navbar-brand > img {
        display: initial;
    }

    .navbar-brand {

        line-height: 33px;
    }
    .navbar .language-dropdown {
        align-self: flex-end;
    }
    .file-footer-buttons{
        display: none;
    }
    #content {
        margin-top: 64px;
    }
</style>

<!--  BEGIN CONTENT PART  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <h1 style="text-align: center"><?= Html::encode($this->title) ?></h1>
        <?php  $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
        <?= $form->errorSummary($model)?>

        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing  ">
                <div class="widget widget-one card-1">
                    <div class="widget-heading">
                        <h6 class="">Сведения</h6>
                    </div>
                    <div class="w-chart">
                        <div class="w-chart-section">
                            <?= $form->field($model, 'project_name')->textInput(['maxlength' => true]) ?>
                        </div>

                        <div class="w-chart-section">
                            <?= $form->field($model, 'initiator')->textInput(['maxlength' => true]) ?>
                        </div>

                        <div class="w-chart-section">
                            <?= $form->field($model, 'information_proof')->dropDownList([
                                'ПП-4563 om 09.01.2020'=>'ПП-4563 om 09.01.2020',
                                'ПП-4095 om 05.01.2019'=>'ПП-4095 om 05.01.2019',
                            ],['prompt' => '---']) ?>
                        </div>
                    </div>

                    <div class="w-chart">
                        <div class="w-chart-section">
                            <?= $form->field($model, 'kind_activity')->dropDownList($viddet,
                                ['prompt' => '---'])->label('Вид деятельности') ?>
                        </div>

                        <div class="w-chart-section">
                            <?= $form->field($model, 'created_jobs')->textInput(['maxlength' => true])->label('Создаваемые рабочие места')->label('Создаваемые рабочие места') ?>
                        </div>

                        <div class="w-chart-section">
                            <?= $form->field($model, 'square')->textInput(['maxlength' => true ])->label('Площадь Га.') ?>
                        </div>
                    </div>

                    <div class="w-chart">
                        <div class="w-chart-section">
                            <?= $form->field($model, 'allocation')->textInput(['maxlength' => true])->label('Основание по выделению земли') ?>
                        </div>

                        <div class="w-chart-section">
                            <?= $form->field($model, 'service_bank')->dropDownList([
                                'Узнацбанк'=>'Узнацбанк',
                                'Узпромстройбанк'=>'Узпромстройбанк',
                                'Асака банк'=>'Асака банк',
                                'Ипотека банк'=>'Ипотека банк',
                                'Агробанк'=>'Агробанк',
                                'Народный банк'=>'Народный банк',
                                'Кишлок курилиш банк'=>'Кишлок курилиш банк',
                                'Хамкор банк'=>'Хамкор банк',
                                'Алока банк'=>'Алока банк',
                                'Турон банк'=>'Турон банк',
                                'Капитал банк'=>'Капитал банк',
                                'Микрокредит банк'=>'Микрокредит банк',
                                'Ипак йули банк'=>'Ипак йули банк',
                                'УзКДБ банк'=>'УзКДБ банк',
                                'Инвест Финанс банк'=>'Инвест Финанс банк',
                                'Ориент Финанс банк'=>'Ориент Финанс банк',
                                'Траст банк'=>'Траст банк',
                                'Азия Алянс банк'=>'Азия Алянс банк',
                                'Давр банк'=>'Давр банк',
                                'Туркистон банк'=>'Туркистон банк',
                                'Савдогар банк'=>'Савдогар банк',
                                'Универсал банк'=>'Универсал банк',
                                'Зираат банк'=>'Зираат банк',
                                'Равнак банк'=>'Равнак банк',
                                'Хай-Тек банк'=>'Агробанк',
                                'ДБ Банка Садерат Ирана'=>'ДБ Банка Садерат Ирана',
                                'Узагроэкспортбанк'=>'Узагроэкспортбанк',
                                'Тенге банк'=>'Тенге банк',
                                'Мадад инвест банк'=>'Мадад инвест банк',
                                'Пойтахт банк'=>'Пойтахт банк',
                                'Определяется'=>'Определяется',
                            ],
                                ['prompt' => '---'])->label('Обслуживающий банк') ?>
                        </div>

                        <div class="w-chart-section">
                            <?= $form->field($model, 'status_proyikt')->dropDownList([
                                'Реализован'=>'Реализован',
                                'Реализуется'=>'Реализуется',
                                'Реализуется по отстованием'=>'Реализуется по отстованием',
                                'Не реализуется'=>'Не реализуется',
                            ],
                                ['prompt' => '---'])->label('Статус проекта') ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing  ">
                <div class="widget widget-one card-1">
                    <div class="widget-heading">
                        <h6 class="">Адрес</h6>
                    </div>
                    <div class="w-chart">
                        <div class="w-chart-section">
                            <?= $form->field($model, 'region_id')->dropDownList($listRegion, ['prompt' => '---']) ?>
                        </div>
                        <div class="w-chart-section">
                            <?= $form->field($model, 'city_id')->dropDownList($listCity, ['prompt' => '---']) ?>
                        </div>
                        <div class="w-chart-section">
                            <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="w-chart">
                        <br>
                        <div class="col-sm-12">
                            <h3 style="text-align: center">Указат место расположение объекта на карте</h3>
                        </div>
                    </div>
                    <div class="w-chart">
                        <div class="col-md-12">
                            <div class="ibox-content" style="position: relative; overflow: hidden;">
                                <div id="ymap_ctrl_display" style="display: none; width: 100%; height: 100%; position: absolute; background-color: rgba(0, 0, 0, 0.5); z-index: 100; pointer-events: none;">
                                    <div style="position: relative; top: 50%; left: 0; right: 0; color: white; text-align: center; font-size: 1.8em; pointer-events: none;">Чтобы изменить масштаб, прокручивайте карту, удерживая клавишу Ctrl.</div>
                                </div>
                                <div id="map" style="width: 100%; height: 600px"></div>
                                <script type="text/javascript">
                                    // Функция ymaps.ready() будет вызвана, когда
                                    // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
                                    ymaps.ready(init);

                                    function init() {
                                        var myPlacemark,
                                            myMap = new ymaps.Map('map', {
                                                center: [41.302933, 69.248274],
                                                zoom: 6,
                                                controls: ['zoomControl', 'searchControl', 'typeSelector',  'fullscreenControl','geolocationControl']
                                            });

                                        // Слушаем клик на карте.
                                        myMap.events.add('click', function (e) {
                                            var coords = e.get('coords');

                                            // Если метка уже создана – просто передвигаем ее.
                                            if (myPlacemark) {
                                                myPlacemark.geometry.setCoordinates(coords);
                                                $('#invest-latitude').val(myPlacemark.geometry.getCoordinates()[0]);
                                                $('#invest-longitude').val(myPlacemark.geometry.getCoordinates()[1]);
                                            }
                                            // Если нет – создаем.
                                            else {
                                                myPlacemark = createPlacemark(coords);
                                                $('#invest-latitude').val(myPlacemark.geometry.getCoordinates()[0]);
                                                $('#invest-longitude').val(myPlacemark.geometry.getCoordinates()[1]);
                                                myMap.geoObjects.add(myPlacemark);
                                                // Слушаем событие окончания перетаскивания на метке.
                                                myPlacemark.events.add('dragend', function () {
                                                    getAddress(myPlacemark.geometry.getCoordinates());
                                                    $('#invest-latitude').val(myPlacemark.geometry.getCoordinates()[0]);
                                                    $('#invest-longitude').val(myPlacemark.geometry.getCoordinates()[1]);
                                                });
                                            }
                                            getAddress(coords);
                                        });

                                        // Создание метки.
                                        function createPlacemark(coords) {
                                            return new ymaps.Placemark(coords, {
                                                iconCaption: 'поиск...'
                                            }, {
                                                preset: 'islands#violetDotIconWithCaption',
                                                draggable: true
                                            });
                                        }

                                        // Определяем адрес по координатам (обратное геокодирование).
                                        function getAddress(coords) {
                                            myPlacemark.properties.set('iconCaption', 'поиск...');
                                            ymaps.geocode(coords).then(function (res) {
                                                var firstGeoObject = res.geoObjects.get(0);

                                                myPlacemark.properties
                                                    .set({
                                                        // Формируем строку с данными об объекте.
                                                        iconCaption: [
                                                            // Название населенного пункта или вышестоящее административно-территориальное образование.
                                                            firstGeoObject.getLocalities().length ? firstGeoObject.getLocalities() : firstGeoObject.getAdministrativeAreas(),
                                                            // Получаем путь до топонима, если метод вернул null, запрашиваем наименование здания.
                                                            firstGeoObject.getThoroughfare() || firstGeoObject.getPremise()
                                                        ].filter(Boolean).join(', '),
                                                        // В качестве контента балуна задаем строку с адресом объекта.
                                                        balloonContent: firstGeoObject.getAddressLine()
                                                    });
                                            });
                                        }
                                        myMap.behaviors.disable('scrollZoom');

                                        var ctrlKey = false;
                                        var ctrlMessVisible = false;
                                        var timer;

// Отслеживаем скролл мыши на карте, чтобы показывать уведомление
                                        myMap.events.add(['wheel', 'mousedown'], function(e) {
                                            if (e.get('type') == 'wheel') {
                                                if (!ctrlKey) { // Ctrl не нажат, показываем уведомление
                                                    $('#ymap_ctrl_display').fadeIn(300);
                                                    ctrlMessVisible = true;
                                                    clearTimeout(timer); // Очищаем таймер, чтобы продолжать показывать уведомление
                                                    timer = setTimeout(function() {
                                                        $('#ymap_ctrl_display').fadeOut(300);
                                                        ctrlMessVisible = false;
                                                    }, 1500);
                                                }
                                                else { // Ctrl нажат, скрываем сообщение
                                                    $('#ymap_ctrl_display').fadeOut(100);
                                                }
                                            }
                                            if (e.get('type') == 'mousedown' && ctrlMessVisible) { // Скрываем уведомление при клике на карте
                                                $('#ymap_ctrl_display').fadeOut(100);
                                            }
                                        });

// Обрабатываем нажатие на Ctrl
                                        $(document).keydown(function(e) {
                                            if (e.which === 17 && !ctrlKey) { // Ctrl нажат: включаем масштабирование мышью
                                                ctrlKey = true;
                                                myMap.behaviors.enable('scrollZoom');
                                            }
                                        });
                                        $(document).keyup(function(e) { // Ctrl не нажат: выключаем масштабирование мышью
                                            if (e.which === 17) {
                                                ctrlKey = false;
                                                myMap.behaviors.disable('scrollZoom');
                                            }
                                        });
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="w-chart">
                        <div class="col-sm-12" style="margin-top: 40px;">
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4">
                                    <?= $form->field($model, 'latitude')->textInput(['readonly' => true]); ?>
                                </div>
                                <div class="col-sm-4">
                                    <?= $form->field($model, 'longitude')->textInput(['readonly' => true]); ?>
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing  ">
                <div class="widget widget-one card-1">
                    <div class="widget-heading">
                        <h6 class="">Партнер с узбекской стороны</h6>
                    </div>
                    <div class="w-chart">
                        <div class="w-chart-section">
                            <?= $form->field($model, 'uz_fio')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="w-chart-section">
                            <?= $form->field($model, 'uz_company_name')->textInput(['maxlength' => true])->label('Наименование Компании/ФИО') ?>
                        </div>
                        <div class="w-chart-section">
                            <?= $form->field($model, 'uz_address')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="w-chart">
                        <div class="w-chart-section ">
                            <?= $form->field($model, 'uz_tel', ['template' => '{label}
                                                           <div class="input-group date">
                                                              <span class="input-group-addon">
                                                                 <i class="fa fa-phone"></i>
                                                              </span>
                                                              {input}
                                                           </div>
                                                           {error}{hint}'])->textInput() ?>
                        </div>
                        <div class="w-chart-section">
                            <?= $form->field($model, 'uz_email', ['template' => '{label}
                                                           <div class="input-group date">
                                                              <span class="input-group-addon">
                                                                 <i class="fa fa-envelope-o"></i>
                                                              </span>
                                                              {input}
                                                           </div>
                                                           {error}{hint}'])->widget(\yii\widgets\MaskedInput::className(), [
                                'clientOptions' => [
                                    'alias' => 'email',
                                ],
                            ]) ?>
                        </div>
                        <div class="w-chart-section ">
                            <?= $form->field($model, 'uz_inn')->textInput() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing  ">
                <div class="widget widget-one card-1">
                    <div class="widget-heading">
                        <h6 class="">Партнер с иностранный стороны</h6>
                    </div>
                    <div class="w-chart">
                        <div class="w-chart-section">
                            <?= $form->field($model, 'foreigner_fio')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="w-chart-section">
                            <?= $form->field($model, 'foreigner_company_name')->textInput(['maxlength' => true])->label('Наименование Компании') ?>
                        </div>
                        <div class="w-chart-section">
                            <?= $form->field($model, 'foreigner_address')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="w-chart">
                        <div class="w-chart-section">
                            <?= $form->field($model, 'foreigner_tel', ['template' => '{label}
                                                           <div class="input-group date">
                                                              <span class="input-group-addon">
                                                                 <i class="fa fa-phone"></i>
                                                              </span>
                                                              {input}
                                                           </div>
                                                           {error}{hint}'])->textInput() ?>
                        </div>
                        <div class="w-chart-section">
                            <?= $form->field($model, 'foreigner_email', ['template' => '{label}
                                                           <div class="input-group date">
                                                              <span class="input-group-addon">
                                                                 <i class="fa fa-envelope-o"></i>
                                                              </span>
                                                              {input}
                                                           </div>
                                                           {error}{hint}'])->widget(\yii\widgets\MaskedInput::className(), [
                                'clientOptions' => [
                                    'alias' => 'email',
                                ],
                            ]) ?>
                        </div>
                        <div class="w-chart-section">
                            <?= $form->field($model, 'foreigner_country')->dropDownList([
                                'Узбекистан'=>'Узбекистан',
                                'Австралия'=>'Австралия',
                                'Австрия'=>'	Австрия',
                                'Азербайджан'=>'Азербайджан',
                                'Албания'=>'Албания',
                                'Алжир'=>'Алжир',
                                'Ангола'=>'Ангола',
                                'Андорра'=>'Андорра',
                                'Антигуа и Барбуда'=>'Антигуа и Барбуда',
                                'Аргентина'=>'Аргентина',
                                'Армения'=>'Армения',
                                'Афганистан'=>'Афганистан',
                                'Багамы'=>'Багамы',
                                'Бангладеш'=>'Бангладеш',
                                'Барбадос'=>'Барбадос',
                                'Бахрейн'=>'Бахрейн',
                                'Беларусь'=>'Беларусь',
                                'Белиз'=>'Белиз',
                                'Бельгия'=>'Бельгия',
                                'Бенин'=>'Бенин',
                                'Болгария'=>'Болгария',
                                'Боливия'=>'Боливия',
                                'Герцеговина'=>'Герцеговина',
                                'Ботсвана'=>'Ботсвана',
                                'Бразилия'=>'Бразилия',
                                'Бруней'=>'Бруней',
                                'Буркина-Фасо'=>'Буркина-Фасо',
                                'Бурунди'=>'Бурунди',
                                'Бутан'=>'Бутан',
                                'Вануату'=>'Вануату',
                                'Великобритания'=>'Великобритания',
                                'Венгрия'=>'Венгрия',
                                'Венесуэла'=>'Венесуэла',
                                'Восточный Тимор'=>'Восточный Тимор',
                                'Вьетнам'=>'Вьетнам',
                                'Габон'=>'Габон',
                                'Гаити'=>'	Гаити',
                                'Гайана'=>'Гайана',
                                'Гамбия'=>'Гамбия',
                                'Гана'=>'Гана',
                                'Гватемала'=>'Гватемала',
                                'Гвинея'=>'Гвинея',
                                'Гвинея-Бисау'=>'	Гвинея-Бисау',
                                'Гондурас'=>'Гондурас',
                                'Гренада'=>'Гренада',
                                'Греция'=>'Греция',
                                'Грузия'=>'Германия',
                                'Дания'=>'Дания',
                                'Джибути'=>'Джибути',
                                'Доминика'=>'Доминика',
                                'Доминикана'=>'Доминикана',
                                'Египет'=>'Египет',
                                'Замбия'=>'Замбия',
                                'Зимбабве'=>'Зимбабве',
                                'Израиль'=>'Израиль',
                                'Индия'=>'Индия',
                                'Индонезия'=>'Индонезия',
                                'Иордания'=>'Иордания',
                                'Ирак'=>'Ирак',
                                'Иран'=>'Иран',
                                'Ирландия'=>'Ирландия',
                                'Исландия'=>'Исландия',
                                'Испания'=>'Испания',
                                'Италия'=>'Италия',
                                'Йемен'=>'Йемен',
                                'Кабо-Верде'=>'Кабо-Верде',
                                'Казахстан'=>'Казахстан',
                                'Камбоджа'=>'Камбоджа',
                                'Камерун'=>'Камерун',
                                'Канада'=>'Канада',
                                'Катар'=>'Катар',
                                'Кения'=>'Кения',
                                'Кипр'=>'Кипр',
                                'Киргизия'=>'Киргизия',
                                'Кирибати'=>'Кирибати',
                                'Китай'=>'Китай',
                                'Колумбия'=>'Колумбия',
                                'Коморы'=>'Коморы',
                                'Конго'=>'Конго',
                                'ДР Конго'=>'ДР Конго',
                                'КНДР'=>'КНДР',
                                'Корея'=>'Корея',
                                'Коста-Рика'=>'Коста-Рика',
                                'Кот-д’Ивуар'=>'Кот-д’Ивуар',
                                'Куба'=>'Куба',
                                'Кувейт'=>'Кувейт',
                                'Лаос'=>'Лаос',
                                'Латвия'=>'Латвия',
                                'Лесото'=>'Лесото',
                                'Либерия'=>'Либерия',
                                'Ливан'=>'Ливан',
                                'Ливия'=>'Ливия',
                                'Литва'=>'Литва',
                                'Лихтенштейн'=>'Лихтенштейн',
                                'Люксембург'=>'Люксембург',
                                'Маврикий'=>'Маврикий',
                                'Мавритания'=>'Мавритания',
                                'Мадагаскар'=>'Мадагаскар',
                                'Малави'=>'Малави',
                                'Малайзия'=>'Малайзия',
                                'Мали'=>'Мали',
                                'Мальдивы'=>'Мальдивы',
                                'Мальта'=>'Мальта',
                                'Марокко'=>'Марокко',
                                'Маршалловы Острова'=>'Маршалловы Острова',
                                'Мексика'=>'Мексика',
                                'Мозамбик'=>'Мозамбик',
                                'Молдавия'=>'Молдавия',
                                'Монако'=>'Монако',
                                'Монголия'=>'Монголия',
                                'Мьянма'=>'Мьянма',
                                'Намибия'=>'Намибия',
                                'Науру'=>'Науру',
                                'Непал'=>'Непал',
                                'Нигер'=>'Нигер',
                                'Нигерия'=>'Нигерия',
                                'Нидерланды'=>'Нидерланды',
                                'Никарагуа'=>'Никарагуа',
                                'Новая Зеландия'=>'Новая Зеландия',
                                'Норвегия'=>'Норвегия',
                                'ОАЭ'=>'ОАЭ',
                                'Оман'=>'Оман',
                                'Пакистан'=>'Пакистан',
                                'Палау'=>'Палау',
                                'Панама'=>'Панама',
                                'Папуа — Новая Гвинея'=>'Папуа — Новая Гвинея',
                                'Парагвай'=>'Парагвай',
                                'Перу'=>'Перу',
                                'Польша'=>'Польша',
                                'Португалия'=>'Португалия',
                                'Россия'=>'Россия',
                                'Руанда'=>'Руанда',
                                'Румыния'=>'Румыния',
                                'Сальвадор'=>'Сальвадор',
                                'Самоа'=>'Самоа',
                                'Сан-Марино'=>'Сан-Марино',
                                'Сан-Томе и Принсипи'=>'Сан-Томе и Принсипи',
                                'Саудовская Аравия'=>'Саудовская Аравия',
                                'Северная Македония'=>'Северная Македония',
                                'Сейшелы'=>'Сейшелы',
                                'Сенегал'=>'Сенегал',
                                'Сент-Винсент и Гренадины'=>'Сент-Винсент и Гренадины',
                                'Сент-Китс и Невис'=>'Сент-Китс и Невис',
                                'Сент-Люсия'=>'Сент-Люсия',
                                'Сербия'=>'Сербия',
                                'Сингапур'=>'Сингапур',
                                'Сирия'=>'Сирия',
                                'Словакия'=>'Словакия',
                                'Словения'=>'Словения',
                                'США'=>'США',
                                'Соломоновы Острова'=>'Соломоновы Острова',
                                'Сомали'=>'Сомали',
                                'Судан'=>'Судан',
                                'Суринам'=>'Суринам',
                                'Сьерра-Леоне'=>'Сьерра-Леоне',
                                'Таджикистан'=>'Таджикистан',
                                'Таиланд'=>'Таиланд',
                                'Танзания'=>'Танзания',
                                'Того'=>'Того',
                                'Тонга'=>'Тонга',
                                'Тринидад и Тобаго'=>'Тринидад и Тобаго',
                                'Тувалу'=>'Тувалу',
                                'Тунис'=>'Тунис',
                                'Туркмения'=>'Туркмения',
                                'Турция'=>'Турция',
                                'Уганда'=>'Уганда',
                                'Украина'=>'Украина',
                                'Уругвай'=>'Уругвай',
                                'Микронезия'=>'Микронезия',
                                'Фиджи'=>'Фиджи',
                                'Филиппины'=>'Филиппины',
                                'Финляндия'=>'Финляндия',
                                'Франция'=>'Франция',
                                'Хорватия'=>'Хорватия',
                                'ЦАР'=>'ЦАР',
                                'Чад'=>'	Чад',
                                'Черногория'=>'Черногория',
                                'Чехия'=>'Чехия',
                                'Чили'=>'Чили',
                                'Швейцария'=>'Швейцария',
                                'Швеция'=>'Швеция',
                                'Шри-Ланка'=>'Шри-Ланка',
                                'Эквадор'=>'Эквадор',
                                'Экваториальная Гвинея'=>'Экваториальная Гвинея',
                                'Эритрея'=>'Эритрея',
                                'Эсватини'=>'Эсватини',
                                'Эстония'=>'Эстония',
                                'Эфиопия'=>'Эфиопия',
                                'ЮАР'=>'ЮАР',
                                'Южный Судан'=>'Южный Судан',
                                'Ямайка'=>'Ямайка',
                                'Япония'=>'Япония',

                            ], ['prompt' => '---'])->label('Страна') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing  ">
                <div class="widget widget-one card-1">
                    <div class="widget-heading">
                        <h6 class="">Финансовые показатели проектов <br> Сумма проекта</h6>
                    </div>
                    <div class="w-chart">
                        <div class="w-chart-section">
                            <?= $form->field($model, 'information_project_sum')->textInput(['maxlength' => true])->label('млн. сум') ?>
                        </div>
                        <div class="w-chart-section">
                            <?= $form->field($model, 'information_project_dollar')->textInput(['maxlength' => true])->label('тыс. долл. США') ?>
                        </div>
                        <div class="w-chart-section">
                            <?= $form->field($model, 'information_dollar_course')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="widget-heading">
                        <h6 class="">Источник финансирование</h6>
                    </div>
                    <div class="w-chart">
                        <div class="w-chart-section">
                            <?= $form->field($model, 'finance_credit_sum')->textInput(['class'=>'form-control information_project_sum1', 'maxlength' => true])->label('Банковские кредиты(млн. сум)')  ?>
                        </div>
                        <div class="w-chart-section">
                            <?= $form->field($model, 'finance_credit_dollar')->textInput(['class'=>'form-control information_project_dollar1','maxlength' => true])->label('Банковские кредиты(тыс. долл. США)') ?>
                        </div>
                        <div class="w-chart-section">
                            <?= $form->field($model, 'finance_self_sum')->textInput(['class'=>'form-control information_project_sum1','maxlength' => true])->label('Собственние средства(млн. сум)') ?>
                        </div>
                    </div>
                    <div class="w-chart">
                        <div class="w-chart-section">
                            <?= $form->field($model, 'finance_frr_dollar')->textInput(['class'=>'form-control information_project_dollar1','maxlength' => true])->label('ФРР (тыс. долл. США)') ?>
                        </div>
                        <div class="w-chart-section">
                            <?= $form->field($model, 'finance_foreign_line_dollar')->textInput(['class'=>'form-control information_project_dollar1','maxlength' => true])->label('Иностранные кредитние линии(тыс. долл. США)') ?>
                        </div>
                        <div class="w-chart-section">
                            <?= $form->field($model, 'finance_investment_dollar')->textInput(['class'=>'form-control information_project_dollar1','maxlength' => true])->label('Иностранные инвестиции (тыс . долл. США)') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing  ">
                <div class="widget widget-one card-1">
                    <div class="widget-heading">
                        <h6 class="">Сумма освоения на дату отчёта</h6>
                    </div>
                    <div class="w-chart">
                        <div class="w-chart-section">
                            <?= $form->field($model, 'information_project_sum1')->textInput([ 'class'=>'form-control project_sum1', 'maxlength' => true])->label('млн. сум') ?>
                        </div>
                        <div class="w-chart-section">
                            <?= $form->field($model, 'information_project_dollar1')->textInput([ 'class'=>'form-control project_dollar1','maxlength' => true])->label('тыс. долл. США') ?>
                        </div>
                        <div class="w-chart-section">
                            <?= $form->field($model, 'information_dollar_course1')->textInput(['maxlength' => true])->label('Текущий курс доллара') ?>
                        </div>
                    </div>
                    <div class="widget-heading">
                        <h6 class="">из них:</h6>
                    </div>
                    <div class="w-chart">
                        <div class="w-chart-section">
                            <?= $form->field($model, 'finance_credit_sum1')->textInput(['class' => 'form-control project_sum11','maxlength' => true])->label('Банковские кредиты(млн. сумм)') ?>
                        </div>
                        <div class="w-chart-section">
                            <?= $form->field($model, 'finance_credit_dollar1')->textInput(['class' => 'form-control project_dollar11','maxlength' => true])->label('Банковские кредиты(тыс. долл. США)') ?>
                        </div>
                        <div class="w-chart-section">
                            <?= $form->field($model, 'finance_self_sum1')->textInput(['class' => 'form-control project_sum11','maxlength' => true])->label('Собственние средства, млн. сум') ?>
                        </div>
                    </div>
                    <div class="w-chart">
                        <div class="w-chart-section">
                            <?= $form->field($model, 'finance_frr_dollar1')->textInput(['class' => 'form-control project_dollar11','maxlength' => true])->label('ФРР (тыс. долл. США)') ?>
                        </div>
                        <div class="w-chart-section">
                            <?= $form->field($model, 'finance_foreign_line_dollar1')->textInput(['class' => 'form-control project_dollar11','maxlength' => true])->label('Иностранные кредитние линии(тыс. долл. США)') ?>
                        </div>
                        <div class="w-chart-section">
                            <?= $form->field($model, 'finance_investment_dollar1')->textInput(['class' => 'form-control project_dollar11','maxlength' => true])->label('Иностранные инвестиции (тыс . долл. США)') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing  ">
                <div class="widget widget-one card-1">
                    <div class="widget-heading">
                        <h4 style="font-width: 600;">проектная мощность <br> Номерной фонд</h4>
                    </div>
                    <div class="w-chart">
                        <div class="w-chart-section" style="width: 100%">
                            <div class="col-sm-12">
                                <?= $form->field($model, 'add_new2')->dropDownList([
                                    'Посещаемость в год'=>'Посещаемость в год',
                                    'Обьект'=>'Обьект',
                                    'Номерной фонд'=>'Номерной фонд',
                                ],['onchange'=>'changeLanguage(this.value)'])->label('Единица измерения') ?>
                            </div>
                            <div class="col-sm-12" id="add_new3">
                                <?= $form->field($model, 'add_new3')->textInput(['class' => 'form-control',  'type'=>'number','min' => '0'])->label('В натуральном выражения') ?>
                            </div>

                            <div class="row"  style=""  id="table12">
                                <table class="table table-bordered table-striped table-condensed">
                                    <tr>
                                        <td class="" rowspan="2">
                                            <?= $form->field($model, 'number_of_rooms')->textInput(['readonly' => true]) ?>
                                        </td>
                                        <td class="info" rowspan="2">
                                            <?= $form->field($model, 'number_of_beds')->textInput(['type'=>'number','min' => '0']) ?>
                                        </td>
                                        <td colspan="8"><h4 style="text-align: center">из них</h4></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?= $form->field($model, 'standart')->textInput(['class' => 'form-control summa', 'type'=>'number','min' => '0', 'max' => 9999]) ?>
                                        </td>
                                        <td>
                                            <?= $form->field($model, 'improvements')->textInput(['class' => 'form-control summa', 'type'=>'number','min' => '0']) ?>
                                        </td>
                                        <td>
                                            <?= $form->field($model, 'semi_suite')->textInput(['class' => 'form-control summa', 'type'=>'number','min' => '0']) ?>
                                        </td>
                                        <td>
                                            <?= $form->field($model, 'suite')->textInput(['class' => 'form-control summa', 'type'=>'number','min' => '0']) ?>
                                        </td>
                                        <td>
                                            <?= $form->field($model, 'apartment')->textInput(['class' => 'form-control summa', 'type'=>'number','min' => '0']) ?>
                                        </td>


                                        <!--                                    yanngi tugadi-->
                                    </tr>
                                </table>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing  ">
                <div class="widget widget-one card-1">
                    <div class="widget-heading">
                        <h6 class="">Сроки проекта</h6>
                    </div>
                    <div class="w-chart">
                        <div class="w-chart-section">

                            <?= $form->field($model, 'finance_start_date')->widget(DatePicker::className(), [
                                'pluginOptions' => [
                                    'format' => 'yyyy-mm-dd',
                                    'todayHighlight' => true,
                                    'autoclose' => true
                                ]
                            ])
                            ?>
                            <?= $form->field($model, 'finance_end_date')->widget(DatePicker::className(), [
                                'pluginOptions' => [
                                    'format' => 'yyyy-mm-dd',
                                    'todayHighlight' => true,
                                    'autoclose' => true
                                ]
                            ])
                            ?>

                        </div>
                        <div class="w-chart-section">

                            <?= $form->field($model, 'finance_start_date1')->widget(DatePicker::className(), [
                                'pluginOptions' => [
                                    'format' => 'yyyy-mm-dd',
                                    'todayHighlight' => true,
                                    'autoclose' => true
                                ]
                            ])
                            ?>
                            <?= $form->field($model, 'finance_end_date1')->widget(DatePicker::className(), [
                                'pluginOptions' => [
                                    'format' => 'yyyy-mm-dd',
                                    'todayHighlight' => true,
                                    'autoclose' => true
                                ]
                            ])
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing  ">
                <div class="widget widget-one card-1">
                    <div class="w-chart">
                        <div class="w-chart-section">
                            <?= $form->field($model, 'problems')->textarea(['maxlength' => true]) ?>
                            <?= $form->field($model, 'short_description')->textarea(['maxlength' => true]) ?>
                        </div>
                        <div class="w-chart-section">
                            <?= $form->field($model, 'solving_problems')->textarea(['maxlength' => true]) ?>
                            <?= $form->field($model, 'link')->textInput(['maxlength' => true])->label('Линк') ?>
                        </div>
                    </div>
                    <div class="w-chart">
                        <div class="w-chart-section">
                            <?php
                            echo $form->field($model, 'imageFiles')->widget(FileInput::classname(), [
                                'options' => ['accept' => 'image/*'],
                            ]);
                            ?>

                        </div>
                        <div class="w-chart-section">
                            <?php
                            echo $form->field($model, 'imageFiles1')->widget(FileInput::classname(), [
                                'options' => ['accept' => 'image/*'],
                            ]);
                            ?>
                        </div>
                        <div class="w-chart-section">
                            <?php
                            echo $form->field($model, 'imageFiles2')->widget(FileInput::classname(), [
                                'options' => ['accept' => 'image/*'],
                            ]);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-md-offset-9" style="margin-bottom: 50px;    padding-bottom: 10px;">
            <?= Html::submitButton($model->isNewRecord ? '<i class="fa fa-check"></i> Сохранить' : 'Редактировать', ['class' => $model->isNewRecord ? 'btn btn-primary btn-rounded btn-block b-r-xs' : 'btn btn-primary btn-block b-r-xs']) ?>
        </div>
        <?php ActiveForm::end(); ?>

    </div>
</div>

