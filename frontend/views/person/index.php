<?php

$this->title = __('Boshqaruvchi personal');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rector">
    <div class="bcontainer">
        <div class="rector_conent">
            <div class="left_content">
                <h2 class="pages_top_title"><?=__('Rahbariyat')?></h2>
                <div class="frame">
                    <?php
                    echo \yii\widgets\ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView' => '_gov_item_view',
                        'layout' => '{items}',
                        'pager' => [
                            'class' => \kop\y2sp\ScrollPager::className(),
                            'noneLeftText' => 'Oxiriga yettingiz',
                            'triggerTemplate' => '<div class="block_frame">
													<div class="left_line"></div>
													<div class="link">Yana yuklash</div>
													<div class="right_line"></div>
												</div>'
                        ]
                    ]);
                    ?>
                </div>
            </div>
            <?=\frontend\widgets\Post_sidebar::widget()?>
        </div>
    </div>
</div>