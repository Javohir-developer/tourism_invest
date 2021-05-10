<?php

$this->title = __('Категории библиотеки');

?>
<div class="library-wrapper">
    <div class="bcontainer">
        <div class="library-title"><?= $this->title ?></div>
        <div class="library-block">
            <ul class="library-list">
                <?php foreach ($models as $model) : ?>
                    <li class="library-item">
                        <a href="<?=\yii\helpers\Url::to('/library/books/'.$model->id)?>">
                            <div class="title">
                                <?=$model->name?>
                            </div>
                            <div class="count"><?=__('Количество:').' '.$model->count?></div>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
