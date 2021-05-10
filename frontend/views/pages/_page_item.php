<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 17.10.2018
 * Time: 0:17
 * @var $model common\models\Post
 */
?>
<a href="<?=\yii\helpers\Url::to('/pages/'.$model->slug)?>" class="grid_item item">
    <div class="item_block_">
        <div class="item_text">
            <?=$model->title?>
        </div>
        <div class="item_date_view">
            <div class="item_view">
                <span class="count"><?=$model->view?></span>
            </div>
        </div>
    </div>
</a>