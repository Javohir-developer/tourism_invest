<?php
\wbraganca\fancytree\FancytreeAsset::register($this);
    $this->title = Yii::t('main','Settings');
    $types = \common\modules\settings\models\Settings::find()->types();
?>
<?php  echo \oks\langs\widgets\LangsWidgets::widget(); ?>
<div class="settings-default-index panel panel-fresh">
    <div class="panel-heading" style="padding-top: 50px">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" style="left: 0">
            <?php $t = 0; foreach ($types as $key_type=>$type): $t++; ?>
                <?php
                    if($t == 1) {
                        $class = "active";
                    }else{
                        $class = "";
                    }
                ?>
            <li class="<?=$class?>"><a href="#setting-data-<?=$key_type?>" data-toggle="tab"><?=$type?></a></li>
            <?php endforeach;?>
        </ul>
    </div>
    <div class="panel-body">
        <!-- Tab panes -->
        <?php $form = yii\widgets\ActiveForm::begin();?>
        <div class="tab-content">
                <?php $t = 0; foreach ($types as $key_type=>$type): $t++; ?>
                    <?php
                    if($t == 1) {
                        $class = "active";
                    }else{
                        $class = "";
                    }
                    ?>
                    <div class="tab-pane <?=$class?>" id="setting-data-<?=$key_type?>">
                        <?php  $settings = \common\modules\settings\models\Settings::find()->type($key_type)->all(); ?>
                        <?php foreach ($settings as $setting): ?>
                            <?php echo $setting->generateForm($form); ?>
                        <?php endforeach;?>
                    </div>
                <?php endforeach;?>
        </div>

        <div class="row" style="margin-top:10px;">
            <div class="form-group">
                <?= \yii\helpers\Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
        <?php yii\widgets\ActiveForm::end(); ?>
    </div>
</div>