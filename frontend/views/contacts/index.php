<?php
use yii\widgets\ActiveForm;
$this->title = Yii::t('app','Bog‘lanish');
$this->params['titlebreadcrumbs'] = Yii::t('app','Bog‘lanish');
$this->params['breadcrumbs'][] = Yii::t('app','Bog‘lanish');
?>
<script type="text/javascript" src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=60445215-6d3a-4f88-87fe-8d52b72e5bc9"></script>

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row align-items-stretch col-mb-50 mb-0">
                <!-- Contact Form
                ============================================= -->
                <div class="col-lg-6">

                    <div class="fancy-title title-border">
                        <h3><?=Yii::t('app','Xabar yuborish'); ?></h3>
                    </div>

                    <!--                    <div class="form-widget">-->

                    <div class="form-result"></div>

                    <?php $form = ActiveForm::begin() ?>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <?= $form->field($model, 'first_name')->textInput(['options' => ['class' => 'sm-form-control']]); ?>
                        </div>

                        <div class="col-md-6 form-group">
                            <?= $form->field($model, 'list_name')->textInput(['options' => ['class' => 'sm-form-control']]); ?>
                        </div>

                        <div class="w-100"></div>

                        <div class="col-md-12 form-group">
                            <?= $form->field($model, 'subject')->textInput(['options' => ['class' => 'sm-form-control']]); ?>
                        </div>

                        <div class="w-100"></div>

                        <div class="col-12 form-group">
                            <?= $form->field($model, 'text')->textarea(["rows"=>"6", "cols"=>"30", 'options' => ['class' => 'sm-form-control']]); ?>
                        </div>
                        <?= $form->field($model,'code')->widget(\Baha2Odeh\RecaptchaV3\RecaptchaV3Widget::className()); ?>

                        <div class="col-12 form-group">
                            <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d m-0"><?=Yii::t('app','Yuborish'); ?></button>
                        </div>
                    </div>

                    <?php ActiveForm::end() ?>
                    <!--                    </div>-->

                </div>
                <div class="col-lg-6 min-vh-50">
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aad183fae5db97dc06bbcb13de85424bedc6ec08338effc29b43078c5a6c06ed5&amp;source=constructor" width="784" height="498" frameborder="0"></iframe>
                </div>
            </div>


        </div>
    </div>
</section><!-- #content end -->



