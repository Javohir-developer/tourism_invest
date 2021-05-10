<?php
/**
 * @var $model \common\models\Pages
 * @var $file \oks\filemanager\models\Files
 * Created by PhpStorm.
 * User: OKS
 * Date: 23.10.2018
 * Time: 3:35
 */


use common\modules\settings\models\Settings;
use common\components\Utils;

$this->title = $model->title;
$this->params ['breadcrumbs'] [] = ['label' => 'Pages', 'url' => '/pages/list'];
$this->params['breadcrumbs'][] = \yii\helpers\StringHelper::truncate($this->title, 50, '...');
if (!empty($model->files)) {
    $files = $model->allFiles('files');
}
?>
<div class="single_page_wrapper">
    <div class="bcontainer">
        <div class="top_link_url_wrapper">
            <?=\yii\widgets\Breadcrumbs::widget([
                'homeLink' => [
                    'label' => __('Bosh sahifa'),
                    'url' => Yii::$app->homeUrl,
                ],
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])?>
        </div>
        <div class="content_sidebar_wrapper">
            <div class="content">
                <div class="single_top_info">
                    <div class="bgc_white">
                        <div class="single_top_block">
                            <div class="right_block">
                                <div class="title">
                                    <?=$model->title?>
                                </div>
                                <div class="subtitle">
                                    <?=$model->anons?>
                                </div>
                            </div>
                        </div>
                        <div class="single_bottom_text elektron-kutubxona">
                            <?=$model->body?>
                        </div>
                        <div class="tutorials_list_wrapper">
                            <?php foreach ($files as $file) : ?>
                                <div class="tutorials_list">
                                    <div class="left">
                                        <?=$file->title?>
                                    </div>
                                    <div class="right">
                                        <a href="<?=$file->src()?>" class="download_file" download><?=__('Скачать')?></a>
                                        <span><?=Yii::$app->formatter->asShortSize(Utils::fileSize($file))?></span>
                                        <img src="<?=$this->getImageUrl('img/'.$file->type.'.svg');?>" alt="">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="bloc_printer">
                            <div class="left">
                                <div class="date">
                                    <?=date('d.m.Y', $model->published_on)?>
                                </div>
                                <div class="view">
                                    <?=$model->view?>
                                </div>
                            </div>
                            <!--<div class="social_buttons">
                                <ul>
                                    <li>
                                        <a href="<?/*=Settings::value('instagram')*/?>">
                                            <img src="<?/*=$this->getImageUrl('img/vk_single.svg')*/?>" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?/*=Settings::value('facebook-social')*/?>">
                                            <img src="<?/*=$this->getImageUrl('img/facebook_single.svg')*/?>" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?/*=Settings::value('twitter-social')*/?>">
                                            <img src="<?/*=$this->getImageUrl('img/twitter_single.svg')*/?>" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?/*=Settings::value('telegram-social')*/?>">
                                            <img src="<?/*=$this->getImageUrl('img/telegram_single.svg')*/?>" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>-->
                            <div class="right">
                                <a class="print"><?=__('Распечатать')?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?=\finance\widgets\Post_sidebar::widget()?>
        </div>
    </div>
</div>

