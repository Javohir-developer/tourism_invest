<?php
/**
 * @var $model \common\models\Pages
 * Created by PhpStorm.
 * User: OKS
 * Date: 23.10.2018
 * Time: 3:35
 */
use common\modules\settings\models\Settings;

$this->title = $model->title;
$this->params ['breadcrumbs'] [] = ['label' => 'Pages', 'url' => '/pages/list'];
$this->params['breadcrumbs'][] = \yii\helpers\StringHelper::truncate($this->title, 50, '...');
?>
<div class="about_us">
    <div class="bcontainer">
        <div class="about_wrapper">
            <div class="about_content print_block">
                <div class="print_block"><h2 class="pages_top_title"><?=$this->title?></h2></div>
                <div class="text print_block">
                    <?=$model->body?>
                    <?php
                        $files = !empty($model->files) ? $model->allFiles('files') : null;
                        if ($files !== null){
                            foreach ($files as $file) {
                                echo '<p>'.__('Fileni yuklash uchun:').'<a href="'.$file->src().'">'.$file->title.'.'.$file->type.'</a></p>';
                            }
                        }
                    ?>
                </div>
                <div class="post_footer">
                    <ul>
                        <li><a class="view"><?=$model->view?></a></li>
                        <li><a class="print"></a></li>
                        <li><a href="<?=Settings::value('facebook-social')?>" class="facebook"></a></li>
                        <li><a href="<?=Settings::value('instagram')?>" class="instagram"></a></li>
                        <li><a href="<?=Settings::value('telegram-social')?>" class="telegram"></a></li>
                        <li><a href="<?=Settings::value('twitter-social')?>" class="twitter"></a></li>
                    </ul>
                </div>
            </div>
            <?=\frontend\widgets\Post_sidebar::widget()?>
        </div>
    </div>
</div>
