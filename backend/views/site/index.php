<?php
use common\models\Region;
use common\models\Viddet;
use common\models\Invest;
use yii\helpers\Html;
use common\models\Resources;
$user_id = Yii::$app->user->identity;
$model1 = Invest::find()->all();
$vid_det = Viddet::find()->all();
$this->title = 'ИНТЕРАКТИВНАЯ БАЗА ИНВЕСТИЦИОННЫХ ПРОЕКТОВ';
//use cinghie\multilanguage\widgets\MultiLanguageWidget;
?>
<style>

    #markers {
        height: 67vh;
        width: 100%;
        margin: 0 auto 20px auto;
    }
    .card {
        background: #fff;
        border-radius: 2px;
        display: inline-block;
        height: 300px;
        margin: 1rem;
        position: relative;
        width: 300px;
    }

    .card-1 {
        box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        transition: all 0.3s cubic-bezier(.25,.8,.25,1);
    }

    .card-1:hover {
        box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
    }
    .ymaps-2-1-78-map{
        width: 1534px;
        height: 556px;
    }
    .widget-one_hybrid{
        height: 125px;
    }

</style>


<div class="overlay"></div>
<div class="search-overlay"></div>


<!--  BEGIN CONTENT PART  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="page-header">

        </div>

        <div class="row layout-top-spacing">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-one card-1">
                    <div class="widget-heading">
                        <h6 class="">STATISTIKA</h6>
                    </div>
                    <div class="row widget-statistic">
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                            <div class="widget widget-one_hybrid widget-followers   card-1">
                                <div class="widget-heading">
                                    <div class="w-title">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                        </div>
                                        <div class="">
                                            <p class="w-value"><?php echo $model->counts['count']; ?></p>
                                            <h5 class="">Loyihalar soni <br>(dona)</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                            <div class="widget widget-one_hybrid widget-referral   card-1">
                                <div class="widget-heading">
                                    <div class="w-title">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                                        </div>
                                        <div class="">
                                            <p class="w-value"><?php echo substr(number_format($model->counts['umumiy_doller'], 2, '.', ''), 0, -1); ?></p>
                                            <h5 class="">Loyihalarning umumiy miqdori <br>(mln.doll)</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                            <div class="widget widget-one_hybrid widget-engagement   card-1">
                                <div class="widget-heading">
                                    <div class="w-title">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                        </div>
                                        <div class="">
                                            <p class="w-value"><?php echo substr(number_format($model->counts['finance_self_sum_doller'], 2, '.', ''), 0, -1); ?></p>
                                            <h5 class="">O'z mablag'lari <br>(mln.doll)</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                            <div class="widget widget-one_hybrid widget-followers   card-1">
                                <div class="widget-heading">
                                    <div class="w-title">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                        </div>
                                        <div class="">
                                            <p class="w-value"><?php echo substr(number_format($model->counts['bankski_kridet'], 2, '.', ''), 0, -1); ?></p>
                                            <h5 class="">Bank kreditlari <br>(mln.doll)</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                            <div class="widget widget-one_hybrid widget-referral   card-1">
                                <div class="widget-heading">
                                    <div class="w-title">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                                        </div>
                                        <div class="">
                                            <p class="w-value"><?php echo substr(number_format($model->counts['inostrane_invest'], 2, '.', ''), 0, -1); ?></p>
                                            <h5 class="">Chet el investitsiyalari <br>(mln.doll)</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                            <div class="widget widget-one_hybrid widget-engagement   card-1">
                                <div class="widget-heading">
                                    <div class="w-title">
                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                        </div>
                                        <div class="">
                                            <p class="w-value"><?php echo substr(number_format($model->counts['jobs'], 2, '.', ''), 0, -1); ?></p>
                                            <h5 class="">Ish o'rinlari yaratildi <br>(ming. odam)</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4 class="text-center">Asosiy (PP, PKM va boshqalar) raqami va sanasi</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div id="donut-charta" class=""></div>

                        <div class="code-section-container">

                            <div class="code-section text-left">
                                <pre>
                                    <?php
                                    $this->registerJs(
                                        '
                                            var donutChart = {
                                                chart: {
                                                    height: 350,
                                                    type: "pie",
                                                    toolbar: {
                                                      show: false,
                                                    }
                                                },
                                                labels : ["ПП-4563 om 09.01.2020","ПП-4095 om 05.01.2019","ПКМ-1053 om 31.2.2019","ПКМ-828 om 30.09.2019", "Новый проект"],
                                                series: [123,1234,1234,123,123 ],
                                                responsive: [{
                                                    breakpoint: 480,
                                                    options: {
                                                        chart: {
                                                            width: 200
                                                        },
                                                        legend: {
                                                            position: "bottom"
                                                        }
                                                    }
                                                }]
                                            }
                                            
                                            var donut = new ApexCharts(
                                                document.querySelector("#donut-charta"),
                                                donutChart
                                            );
                                            
                                            donut.render();
    
                                        '
                                    );
                                    ?>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4 class="text-center">Loyihalar holati</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div id="donut-charts" class=""></div>

                        <div class="code-section-container">

                            <div class="code-section text-left">
                                <pre>
                                    <?php
                                    $this->registerJs(
                                        '
                                            var donutChart = {
                                                chart: {
                                                    height: 350,
                                                    type: "donut",
                                                    toolbar: {
                                                      show: false,
                                                    }
                                                },
                                                labels : ["Amalga oshirildi","Реализуется","Amalga oshirildi","Amalga oshirilmadi"],
                                                series: [123,1234,1234,123,123 ],
                                                responsive: [{
                                                    breakpoint: 480,
                                                    options: {
                                                        chart: {
                                                            width: 200
                                                        },
                                                        legend: {
                                                            position: "bottom"
                                                        }
                                                    }
                                                }]
                                            }
                                            
                                            var donut = new ApexCharts(
                                                document.querySelector("#donut-charts"),
                                                donutChart
                                            );
                                            
                                            donut.render();
    
                                        '
                                    );
                                    ?>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  END CONTENT PART  -->



<!--  BEGIN CONTENT AREA  -->


<div id="content" class="main-content  ">
        <div class="layout-px-spacing  ">
            <div class="row layout-top-spacing card-1" style="background: #fff;">
                <div class="row" style="margin: 10px auto">
                    <div class="col-sm-6">
                        <select class="form-control" id="showMarkers">
                            <option value="null">Выберите тип</option>
                            <?php
                            $types_type = \common\models\Typesresources::find()->all();
                            foreach ($vid_det as $type){
                                ?>
                                <option value="<?= $type->id ?>"><?= $type->value_uz ?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <select class="form-control" id="showMarkersRegion">
                            <option value="null">Выберите регион</option>
                            <?php
                            $types_region = \common\models\Region::find()->all();
                            foreach ($types_region as $type){
                                ?>
                                <option value="<?= $type->id ?>"><?= $type->name_ru ?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="" id="markers" ></div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    function mapHeight () {
        let tmp = '750px';
        let h = document.documentElement.clientHeight;
        if (h < 750) {
            tmp = (h * 0.6) + 'px'
        }
        return tmp
    }
    // Функция ymaps.ready() будет вызвана, когда
    // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
    ymaps.ready(init);
    function init(){
        // Создание карты.
        var myMap = new ymaps.Map("markers", {
                // Координаты центра карты.
                // Порядок по умолчанию: «широта, долгота».
                // Чтобы не определять координаты центра карты вручную,
                // воспользуйтесь инструментом Определение координат.
                center: [41.302933, 69.248274],
                controls: ['zoomControl', 'searchControl', 'typeSelector',  'fullscreenControl','routeButtonControl','geolocationControl'],
                // Уровень масштабирования. Допустимые значения:
                // от 0 (весь мир) до 19.
                zoom: 5
            }),
            objectManager = new ymaps.ObjectManager({
                // Чтобы метки начали кластеризоваться, выставляем опцию.
                clusterize: true,
                // ObjectManager принимает те же опции, что и кластеризатор.
                gridSize: 32,
                geoObjectOpenBalloonOnClick: true,
                clusterOpenBalloonOnClick: false
            });
        objectManager.objects.options.set('preset', 'islands#greenDotIcon');
        objectManager.clusters.options.set('preset', 'islands#greenClusterIcons');
        myMap.geoObjects.add(objectManager);
        $('#showMarkersRegion').prop('disabled', 'disabled')
        var showmarker = function () {
            var selectedValue = $(this).val();
            selectedType = selectedValue;
            if (selectedValue == "null"){
                $('#showMarkersRegion').prop('disabled', 'disabled')
                objectManager.removeAll();
            }
            objectManager.removeAll();
            <?php foreach ($model1 as $row): ?>
            console.log(selectedValue, <?= $row->kind_activity ?>);
            if (selectedValue == <?=  $row->kind_activity ?>) {
                var data = '{"type": "Feature", "id": <?= $row->id ?>,"properties": {"balloonContentBody": "<?php

                    //                                foreach ($types_type as $type){
                    //                                    if ($row->organization_type == $type->id) {
                    //                                        echo $type->name_ru . " «" . Html::encode($row->organization_name ). "»";
                    //                                    }
                    //                                }

                    ?>"},  "geometry": {"type": "Point", "coordinates": [<?= $row->latitude ?>, <?= $row->longitude ?>]}}';
                data = JSON.parse(data);
                objectManager.add(data);
                $('#showMarkersRegion').prop('disabled', false)
            }
            <?php endforeach; ?>
        }
        var selectedType;
        $(function (){
            $("#showMarkers").change(showmarker);



            $("#showMarkersRegion").change(function () {
                var selectedValue = $(this).val();
                if (selectedValue == "null"){
                    $(showmarker())
                    return;
                }
                objectManager.removeAll();
                <?php foreach ($model1 as $row): ?>
                if (selectedValue == <?=  $row->region_id?>) {
                    console.log(<?= $row->region_id ?>)
                    var data = '{"type": "Feature", "id": <?= $row->id ?>,"properties": {"balloonContentBody": "<?php

                        //                                    foreach ($types_region as $type){
                        //                                        if ($row->region_id == $type->id) {
                        //                                            echo $type->name_ru . " «" . Html::encode($row->organization_name ). "»";
                        //                                        }
                        //                                    }

                        ?>"},  "geometry": {"type": "Point", "coordinates": [<?= $row->latitude ?>, <?= $row->longitude ?>]}}';
                    data = JSON.parse(data);
                    objectManager.add(data);
                    $('#showMarkersRegion').prop('disabled', false)
                }
                <?php endforeach; ?>
            });
        });


        myMap.setBounds(objectManager.getBounds(),{checkZoomRange:true, zoomMargin:9});

    }
</script>