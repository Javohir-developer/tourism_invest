<?php
/**
 *Created by PhpStorm.
 * User: OKS
 * Date: 17.10.2018
 * Time: 0:17
 * @var $top_post  common\models\Post

 */

$this->title = __('Pages');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news">
    <div class="bcontainer">
        <div class="left_content">
            <h2 class="pages_top_title"><?=$this->title?></h2>
            <?php
            echo \yii\widgets\ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_page_item',
                'summary' => false,
                'options' => [
                    'class' => 'news_gallery',
                ],
                'itemOptions' => [
                    'tag' => false,
                ],
                'pager' => [
                    'class' => \kop\y2sp\ScrollPager::className(),
                    'noneLeftText' => '',
                    'triggerTemplate' => '<div class="frame_link">
                                                <a style="cursor: pointer" class="link">
                                                    <span>'.__('Яна юклаш').'</span>
                                                </a>
                                            </div>'
                ]
            ]);
            ?>
        </div>
        <?=\frontend\widgets\Post_sidebar::widget()?>
    </div>
</div>


