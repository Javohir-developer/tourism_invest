<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 11.12.2018
 * Time: 14:55
 */
$this->title = __('Кўп бериладиган саволлар');
?>
<div class="faq">
    <div class="bcontainer">
        <div class="faq_wrapper">
            <div class="faq_content">
                <div class="faq_top_wrap">
                    <h2 class="pages_top_title">Савол жавоблар</h2>
                    <a href="#" data-iziModal-open="#leave_question" class="contact_open_modal">Савол колдириш</a>
                </div>
                <?php foreach ($models as $model) : ?>
                    <div class="component_user">
                        <div class="user_question_block">
                            <div class="user_question">
                                <?=$model->question?>
                            </div>
                        </div>
                        <div class="answer_block">
                            <div class="answer_text">
                                <?=$model->answer?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="sidebar_block">
                <?php $banner = \common\models\Slider::getAllBanners(1); ?>
                <?php if (!empty($banner)) : ?>
                    <?php $image = $banner[0]->allFiles('image'); ?>
                    <a href="<?=$banner[0]->link?>" class="advertisements">
                        <img src="<?=empty($image) ? $image[0]->src('low') : ''?>" alt="">
                    </a>
                <?php endif; ?>
                <div class="percent_frame">
                    <?php $percent = $active*100/count(\common\models\Contact::find()->all())?>
                    <div class="chart" data-percent="<?=$percent?>"><span><?=__('2018')?></span></div>
                    <div class="applications_wrap">
                        <div class="applications">
                            <div class="text"><?=__('Келиб тушган аризалар сони')?></div>
                            <div class="number"><?=$active?> </div>
                        </div>
                        <div class="solutions">
                            <div class="text"><?=__('Хал этилганлар')?></div>
                            <div class="number"><?=$deactive?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
