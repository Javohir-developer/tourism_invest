<?php
$this->title = $title;

?>
<div class="library-wrapper">
    <div class="bcontainer">
        <div class="library-title"><?= $this->title ?></div>
        <div class="library-block">
            <?php
            echo \yii\widgets\ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_item',
                'options' => [
                    'class' => 'library-single',
                ],
                'itemOptions' => [
                    'tag' => false,
                ],
                'summary' => '',
            ]);
            ?>
        </div>
    </div>
</div>
