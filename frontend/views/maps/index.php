<?php

use yii\web\View;

$this->title = Yii::t('app','Invest loyihalarini kartada joylashivi');
$this->params['titlebreadcrumbs'] = Yii::t('app','Invest loyihalarini kartada joylashivi');
$this->params['breadcrumbs'][] = Yii::t('app','Karta');
?>
<style>
    .ymaps-2-1-78-map{
        width: 1298px;
        height: 618px!important;
    }
    .content-wrap {
        padding: 0px 0;
    }

    .ymaps-2-1-78-inner-panes {
        overflow: unset;
    }
    @media (min-width: 992px){
        .side-header:not(.open-header) #wrapper {
            margin: 0 0 0 180px;
            width: auto !important;
        }
    }
    #map {
        width: 100%; height: 569px; padding: 0; margin: 0;
    }
    #page-title h1 {
        margin: 0 0 0 32px;
    }
</style>
<script type="text/javascript" src="https://api-maps.yandex.ru/2.1.78/?lang=ru_RU&amp;apikey=608bab7f-a651-42bd-840a-d1c0a9ea67ac"></script>
<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>-->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>-->
<section id="content" >
    <div class="content-wrap wrapper">
        <div class="container clearfix">
            <div class="row align-items-stretch col-mb-50 mb-0">
                <div class="col-lg-12 min-vh-50">
                    <div class="wrapper bottom-panel-closed ">
                        <div class="top">
                            <div class="left-panel-holder">
                                <div class="left-panel">
                                    <ul >
                                        <?php foreach ($vid_det as $det): ?>
                                        <li class="left-panel-ajax"><i class="<?= $det->icons; ?>"> </i> <input type="hidden" value="<?= $det->id; ?>"> <span><?= $det->value_uz; ?></span> </li>
                                        <?php endforeach;?>
                                        <input type="hidden" id="viddet" value="0">
                                    </ul>
                                    <div class="close-btn m-tooltip-right" data-tooltip-content="Свернуть/Развернуть"><a class="btn-floating btn-large waves-effect waves-light blue"><i class="icon-line-arrow-right-circle"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="map"></div>

                    <?php
                    $this->registerJs(
                        "
                        var $valu = $(this).children().next().val();
                        alert($valu);
                        ",
                        View::POS_READY,
                        'my-button-handler'
                    );
                    ?>
                    <script>
                        ymaps.ready(function () {
                            var myMap = new ymaps.Map('map', {
                                    center: [41.302933, 69.248274],
                                    zoom: 9
                                }, {
                                    searchControlProvider: 'yandex#search'
                                }),
                                clusterer = new ymaps.Clusterer({
                                    preset: 'islands#invertedVioletClusterIcons',
                                    clusterHideIconOnBalloonOpen: true,
                                    geoObjectHideIconOnBalloonOpen: true
                                });

                            /**
                             * Кластеризатор расширяет коллекцию, что позволяет использовать один обработчик
                             * для обработки событий всех геообъектов.
                             * Будем менять цвет иконок и кластеров при наведении.
                             */
                            clusterer.events
                                // Можно слушать сразу несколько событий, указывая их имена в массиве.
                                .add(['mouseenter', 'mouseleave'], function (e) {
                                    var target = e.get('target'),
                                        type = e.get('type');
                                    if (typeof target.getGeoObjects != 'undefined') {
                                        // Событие произошло на кластере.
                                        if (type == 'mouseenter') {
                                            target.options.set('preset', 'islands#invertedPinkClusterIcons');
                                        } else {
                                            target.options.set('preset', 'islands#blueBeachIcon');
                                        }
                                    } else {
                                        // Событие произошло на геообъекте.
                                        if (type == 'mouseenter') {
                                            target.options.set('preset', 'islands#pinkIcon');
                                        } else {
                                            target.options.set('preset', 'islands#violetIcon');
                                        }
                                    }
                                });

                            var getPointData = function (index) {
                                    return {
                                        balloonContentBody: 'балун <strong>метки ' + index + '</strong>',
                                        clusterCaption: 'метка <strong>' + index + '</strong>'
                                    };
                                },
                                getPointOptions = function () {
                                    return {
                                        preset: 'islands#violetIcon'
                                    };
                                },
                                points = [
                                    <?php foreach ($model as $map):?>

                                        [<?=$map->latitude; ?>,<?=$map->longitude; ?>],

                                    <?php endforeach;?>
                                ],
                                geoObjects = [];

                            for(var i = 0, len = points.length; i < len; i++) {
                                geoObjects[i] = new ymaps.Placemark(points[i], getPointData(i), getPointOptions());
                            }

                            clusterer.add(geoObjects);
                            myMap.geoObjects.add(clusterer);

                            myMap.setBounds(clusterer.getBounds(), {
                                checkZoomRange: true
                            });
                            $( ".left-panel-ajax" ).click(function() {
                                console.log($(this).children().next().val());
                            });
                        });
                    </script>




                </div>
            </div>

        </div>
    </div>
</section>

<script>
    ChatraID = 'N2J4AvtJ2q7bXzMpC';
    (function(d, w, c) {
        var n = d.getElementsByTagName('script')[0],
            s = d.createElement('script');
        w[c] = w[c] || function() {
            (w[c].q = w[c].q || []).push(arguments);
        };
        s.async = true;
        s.src = (d.location.protocol === 'https:' ? 'https:': 'http:')
            + '//call.chatra.io/chatra.js';
        n.parentNode.insertBefore(s, n);
    })(document, window, 'Chatra');
</script>

