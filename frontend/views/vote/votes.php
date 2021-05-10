<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 15.02.2019
 * Time: 13:57
 */
?>
<div class="poll_page_wrapper">
    <div class="bcontainer">
        <div class="photo_gallery_page_title">
            <div class="title">Опрос недели</div>
            <div class="line_solid"></div>
        </div>
            <?php
            echo \yii\widgets\ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_vote_item',
                'itemView' => function ($model, $key, $index, $widget) {
                    return $this->render('_vote_item', [
                        'model' => $model,
                        'key' => $key,
                        'index' => $index,
                        'widget' => $widget,
                    ]);
                },
                'summary' => false,
                'options' => [
                    'class' => 'poll_page_block',
                ],
                'itemOptions' => [
                    'tag' => false,
                ],
                'pager' => [
                    'options' => [
                        'class' => 'minfin_pagination',
                    ],
                    'prevPageLabel' => '',
                    'nextPageLabel' => '',

                ]
            ]);
            ?>

    </div>
    <?= \frontend\widgets\UsefullLinks::widget()?>
</div>
