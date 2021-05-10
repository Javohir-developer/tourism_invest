<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 23.10.2018
 * Time: 9:50
 */

use yii\helpers\Html;

$this->title = __('Settings');
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="general">
	<div class="container">
		<div class="link_home_next">
			<h2><?=$this->title?></h2>
			<?=\yii\widgets\Breadcrumbs::widget([
				'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
			])?>
		</div>
	</div>
</section>
<section class="setting_profil">
    <div class="container">
        <form action="<?=\yii\helpers\Url::to('/site/settings')?>" method="post" autocomplete="off">
			<? echo Html :: hiddenInput(\Yii::$app->getRequest()->csrfParam, \Yii::$app->getRequest()->getCsrfToken(), []);?>
            <div class="row">
                <div class="col-md-8">
                    <div class="left_frame">
                        <div class="frame_input">
                            <label><?=__('Name')?></label>
                            <input type="text" name="User[username]" value="<?= $model->username?>">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="frame_duble_input">
                                    <label><?=__('Kompaniya')?></label>
                                    <input type="text" name="User[company]" value="<?= $model->company?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="frame_duble_input">
                                    <label><?=__('Position')?></label>
                                    <input type="text" name="User[position]" value="<?= $model->position?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="frame_select">
                                    <label for="" class="title_select"><?=__('Region')?></label>
                                    <?php $regions = \yii\helpers\ArrayHelper::map( \common\models\Region::find()->all(), 'id', 'name');?>
                                    <select class="selectpicker" name="User[region_id]">
                                        <?php foreach ($regions as $key=>$region) : ?>
                                            <?php

                                            ?>
                                            <option value="<?=$key?>" <?= ($model->region_id == $key)? "selected":'' ?>><?=$region?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-6">
                                <div class="phone">
                                    <label for="" class="title_select"><?=__('Phone')?></label>
                                    <input type="text" id="zakaz-tel" class="phone-number" name="User[phone]"  value="<?= $model->phone?>" aria-required="true">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="right_frame">
                        <div class="old_password">
                            <label for=""><?=__('Old password')?></label>
                            <input type="password" name="User[oldPassword]">
                            <button type="button"></button>
                        </div>
                        <div class="new_password">
                            <label for=""><?=__('New password')?></label>
                            <input type="password" name="User[newPassword]">
                            <button type="button"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button_form">
                <button type="submit" class="save_button"><?=__('Save')?></button>
            </div>
        </form>
    </div>
</section>