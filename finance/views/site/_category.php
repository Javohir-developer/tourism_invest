<?
if($model->image){
    $image = $model->allFiles('image');
    $images = $image[0]->src('low');
}else{
    $images = '';
}

?>
<a href="<?=\yii\helpers\Url::to('/post/view/'.$model->slug)?>" class="item3">
    <img src="<?=$images?>" alt=""> <span class="content"><span class="title"><?=$model->title?></span>  <span class="description"><?=$model->intro?></span>
                        <span
                                class="detail"><?=__('Подробно')?></span>
                            </span>
</a>