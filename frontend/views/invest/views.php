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
<section id="content" >
    <div class="content-wrap wrapper">
        <div class="container clearfix">
            <div class="row align-items-stretch col-mb-50 mb-0">
                <div class="col-lg-12 min-vh-50">
                    <div id="map"></div>


                    <script>


                        ymaps.ready(init);

                        function init () {
                            var myMap = new ymaps.Map('map', {
                                    center: [41.302933, 69.248274],
                                    zoom: 5
                                }, {
                                    searchControlProvider: 'yandex#search'
                                }),
                                objectManager = new ymaps.ObjectManager({
                                    // Чтобы метки начали кластеризоваться, выставляем опцию.
                                    clusterize: true,
                                    geoObjectOpenBalloonOnClick: false,
                                    clusterOpenBalloonOnClick: false
                                });

                            myMap.geoObjects.add(objectManager);
                            var data = '{"type": "Feature", "id": 1,"properties": {"balloonContentBody": " "},  "geometry": {"type": "Point", "coordinates": [<?= $latitude ?>, <?= $longitude ?>]}}';
                            objectManager.add(data);



                            function onObjectEvent (e) {
                                var objectId = e.get('objectId');
                                if (e.get('type') == 'mouseenter') {
                                    // Метод setObjectOptions позволяет задавать опции объекта "на лету".
                                    objectManager.objects.setObjectOptions(objectId, {
                                        preset: 'islands#yellowIcon'
                                    });
                                } else {
                                    objectManager.objects.setObjectOptions(objectId, {
                                        preset: 'islands#blueIcon'
                                    });
                                }
                            }

                            function onClusterEvent (e) {
                                var objectId = e.get('objectId');
                                if (e.get('type') == 'mouseenter') {
                                    objectManager.clusters.setClusterOptions(objectId, {
                                        preset: 'islands#yellowClusterIcons'
                                    });
                                } else {
                                    objectManager.clusters.setClusterOptions(objectId, {
                                        preset: 'islands#blueClusterIcons'
                                    });
                                }
                            }

                            objectManager.objects.events.add(['mouseenter', 'mouseleave'], onObjectEvent);
                            objectManager.clusters.events.add(['mouseenter', 'mouseleave'], onClusterEvent);
                        }
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

