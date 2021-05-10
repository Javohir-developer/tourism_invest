<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="note_found_wrapper">
    <div class="bcontainer">
        <div class="note_found_title_block">
            <div class="title">
                <?=__('Страница не найдено!')?>
            </div>
            <div class="subtitle">
                <?=__('Вы можете пользоватся поисковым системам')?>
            </div>
        </div>
        <form action="<?=\yii\helpers\Url::to('/site/search')?>" method="get">
            <div class="input_block">
                <input type="text" name="input" placeholder="<?=__('Текст для поиска')?>">
                <button></button>
            </div>
        </form>
        <div class="img_block_wrapper">
            <div class="img_block"></div>
        </div>
    </div>
</div>
