<?php
$this->title = \common\modules\settings\models\Settings::value('text-head');
?>
<?= \finance\widgets\Slider::widget() ?>

<div class="index_activity_wrapper">
    <div class="bcontainer">
        <div class="activity_block_frame">
            <?php
                $menu_frontend_second = new \common\modules\menu\components\SecondMenu(['alias' => 'second-menu', 'without_cache' => true]);
            ?>
        </div>
    </div>
</div>

<?= \finance\widgets\News::widget() ?>

<?= \finance\widgets\AboutUs::widget() ?>
<style>
    .index_gallery_block_wrapper {
        margin-top: 30px!important;
    }
</style>
<?//=\finance\widgets\Courses::widget()?>

<?//= \finance\widgets\Info::widget() ?>

<?//= \finance\widgets\Gallery::widget() ?>

<?= \finance\widgets\UsefullLinks::widget() ?>

