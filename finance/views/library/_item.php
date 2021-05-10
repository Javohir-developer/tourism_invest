<?php
/**
 * @var $model \common\models\LibraryBooks
 */
$file = $model->getFiles();
?>
<div class="frame">
    <div class="info">
        <?=$model->name?>
    </div>
    <div class="type">
        <img src="<?=$this->getImageUrl('img/'.$file->type.'.svg')?>" alt="">
        <a href="<?=\yii\helpers\Url::to('http://cdn.my.tcmf.uz/uploads/'.mb_substr($file->file,0,2).'/'.mb_substr($file->file, 2).'.'.$file->type)?>"><?=__('Скачать')?></a>
    </div>
</div>
