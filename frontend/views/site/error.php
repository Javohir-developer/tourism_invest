<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Url;

$this->title = $name;
?>
<div class="note_found_wrapper">
    <div class="bcontainer">
        <div class="note_found_title">
            <?=__('Страница не найдено!')?>
        </div>
        <div class="note_found_form_block">
            <form action="<?=Url::to('/site/search')?>" method="get">
                <div class="input_block">
                    <input type="text" name="input" placeholder="<?=__('По ищите отсюда')?>">
                    <button></button>
                </div>
            </form>
        </div>
        <div class="note_found_img">
            <img src="<?=$this->getImageUrl('/img/404.png')?>" alt="">
        </div>
    </div>
</div>
