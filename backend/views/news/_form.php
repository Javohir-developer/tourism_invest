<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use kartik\file\FileInput;

$this->title = "Yanglik qo'shish"
/* @var $this yii\web\View */
/* @var $model common\models\News */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
    .lang{
        margin-left: 10px;
    }
    .widget-content-area {
        padding: 0 20px 0 20px;
    }
    .lang12{
        width: 23px;
    }
    .btn {
        white-space: inherit;
    }
    .input-group>.custom-file, .input-group>.custom-select, .input-group>.form-control, .input-group>.form-control-plaintext {
        flex: .9 1 auto;
    }
    .fade {
        opacity: 1;
    }

    .navbar-brand > img {
        display: initial;
    }

    .navbar-brand {

        line-height: 33px;
    }
    .navbar .language-dropdown {
        align-self: flex-end;
    }
    .file-footer-buttons{
        display: none;
    }
</style>
    <div class="col-lg-12 col-12 layout-spacing" style="margin-top: 86px;">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 ">
                        <h4 class="text-center" style="margin-top: 10px">Yanglik qo'shish </h4>
                    </div>
                </div>
            </div>
            <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
            <?= $form->errorSummary($model)?>
            <div class="widget-content widget-content-area border-tab">

                <ul class="nav nav-tabs mt-3" id="border-tabs" role="tablist" style="margin-bottom: 20px">
                    <li class="nav-item">
                        <a class="nav-link active" id="border-contact-tab" data-toggle="tab" href="#border-contact" role="tab" aria-controls="border-contact" aria-selected="true">

                            <svg class="lang12" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <circle style="fill:#F0F0F0;" cx="256" cy="256" r="256"/>
                                <g>
                                    <path style="fill:#0052B4;" d="M52.92,100.142c-20.109,26.163-35.272,56.318-44.101,89.077h133.178L52.92,100.142z"/>
                                    <path style="fill:#0052B4;" d="M503.181,189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075,89.076H503.181z"/>
                                    <path style="fill:#0052B4;" d="M8.819,322.784c8.83,32.758,23.993,62.913,44.101,89.075l89.074-89.075L8.819,322.784L8.819,322.784
                                        z"/>
                                    <path style="fill:#0052B4;" d="M411.858,52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177L411.858,52.921z"/>
                                    <path style="fill:#0052B4;" d="M100.142,459.079c26.163,20.109,56.318,35.272,89.076,44.102V370.005L100.142,459.079z"/>
                                    <path style="fill:#0052B4;" d="M189.217,8.819c-32.758,8.83-62.913,23.993-89.075,44.101l89.075,89.075V8.819z"/>
                                    <path style="fill:#0052B4;" d="M322.783,503.181c32.758-8.83,62.913-23.993,89.075-44.101l-89.075-89.075V503.181z"/>
                                    <path style="fill:#0052B4;" d="M370.005,322.784l89.075,89.076c20.108-26.162,35.272-56.318,44.101-89.076H370.005z"/>
                                </g>
                                <g>
                                    <path style="fill:#D80027;" d="M509.833,222.609h-220.44h-0.001V2.167C278.461,0.744,267.317,0,256,0
                                        c-11.319,0-22.461,0.744-33.391,2.167v220.44v0.001H2.167C0.744,233.539,0,244.683,0,256c0,11.319,0.744,22.461,2.167,33.391
                                        h220.44h0.001v220.442C233.539,511.256,244.681,512,256,512c11.317,0,22.461-0.743,33.391-2.167v-220.44v-0.001h220.442
                                        C511.256,278.461,512,267.319,512,256C512,244.683,511.256,233.539,509.833,222.609z"/>
                                    <path style="fill:#D80027;" d="M322.783,322.784L322.783,322.784L437.019,437.02c5.254-5.252,10.266-10.743,15.048-16.435
                                        l-97.802-97.802h-31.482V322.784z"/>
                                    <path style="fill:#D80027;" d="M189.217,322.784h-0.002L74.98,437.019c5.252,5.254,10.743,10.266,16.435,15.048l97.802-97.804
                                        V322.784z"/>
                                    <path style="fill:#D80027;" d="M189.217,189.219v-0.002L74.981,74.98c-5.254,5.252-10.266,10.743-15.048,16.435l97.803,97.803
                                        H189.217z"/>
                                    <path style="fill:#D80027;" d="M322.783,189.219L322.783,189.219L437.02,74.981c-5.252-5.254-10.743-10.266-16.435-15.047
                                        l-97.802,97.803V189.219z"/>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                        </svg>
                            ENGLISH
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="border-home-tab" data-toggle="tab" href="#border-home" role="tab" aria-controls="border-home" aria-selected="false">
                            <svg class="lang12" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <path style="fill:#F0F0F0;" d="M12.088,178.088C4.246,202.656-0.001,228.829,0,255.998c-0.001,27.17,4.247,53.345,12.089,77.913
                                    l243.911,11.132l243.911-11.13c7.841-24.569,12.09-50.745,12.09-77.913c-0.001-27.17-4.248-53.344-12.09-77.913l-243.911-11.13
                                    L12.088,178.088z"/>
                                <g>
                                    <path style="fill:#D80027;" d="M499.91,178.088l-243.911-11.13l-243.912,11.13c-2.324,7.284-4.325,14.711-6.002,22.261h499.824
                                        C504.234,192.798,502.234,185.37,499.91,178.088z"/>
                                    <path style="fill:#D80027;" d="M6.088,311.651c1.675,7.55,3.676,14.976,6,22.26l0.024,0.001l243.886,11.13l243.911-11.13
                                        c2.324-7.284,4.325-14.711,6.001-22.261H6.088z"/>
                                </g>
                                <path style="fill:#6DA544;" d="M255.999,511.999c114.216,0,210.946-74.803,243.911-178.087H12.089
                                    C45.054,437.195,141.786,511.999,255.999,511.999z"/>
                                <path style="fill:#338AF3;" d="M255.999,0.001C141.785,0.002,45.055,74.805,12.088,178.088l487.821,0.001
                                    C466.946,74.804,370.215,0,255.999,0.001z"/>
                                <g>
                                    <path style="fill:#F0F0F0;" d="M116.986,105.74c0-23.977,16.851-44.007,39.354-48.921c-3.458-0.756-7.047-1.165-10.733-1.165
                                        c-27.662,0-50.087,22.424-50.087,50.087s22.423,50.087,50.087,50.087c3.686,0,7.274-0.41,10.733-1.165
                                        C133.838,149.747,116.986,129.717,116.986,105.74z"/>
                                    <polygon style="fill:#F0F0F0;" points="185.944,128.507 189.334,138.942 200.306,138.942 191.43,145.392 194.82,155.827
                                        185.944,149.378 177.066,155.827 180.457,145.392 171.58,138.942 182.552,138.942 	"/>
                                    <polygon style="fill:#F0F0F0;" points="220.964,128.507 224.355,138.942 235.327,138.942 226.45,145.392 229.841,155.827
                                        220.964,149.378 212.087,155.827 215.478,145.392 206.602,138.942 217.573,138.942 	"/>
                                    <polygon style="fill:#F0F0F0;" points="255.985,128.507 259.375,138.942 270.348,138.942 261.471,145.392 264.861,155.827
                                        255.985,149.378 247.107,155.827 250.499,145.392 241.621,138.942 252.594,138.942 	"/>
                                    <polygon style="fill:#F0F0F0;" points="291.006,128.507 294.397,138.942 305.368,138.942 296.492,145.392 299.883,155.827
                                        291.006,149.378 282.128,155.827 285.52,145.392 276.642,138.942 287.614,138.942 	"/>
                                    <polygon style="fill:#F0F0F0;" points="326.026,128.507 329.417,138.942 340.389,138.942 331.513,145.392 334.904,155.827
                                        326.026,149.378 317.149,155.827 320.54,145.392 311.664,138.942 322.635,138.942 	"/>
                                    <polygon style="fill:#F0F0F0;" points="220.964,92.08 224.355,102.514 235.327,102.514 226.45,108.965 229.841,119.399
                                        220.964,112.95 212.087,119.399 215.478,108.965 206.602,102.514 217.573,102.514 	"/>
                                    <polygon style="fill:#F0F0F0;" points="255.985,92.08 259.375,102.514 270.348,102.514 261.471,108.965 264.861,119.399
                                        255.985,112.95 247.107,119.399 250.499,108.965 241.621,102.514 252.594,102.514 	"/>
                                    <polygon style="fill:#F0F0F0;" points="291.006,92.08 294.397,102.514 305.368,102.514 296.492,108.965 299.883,119.399
                                        291.006,112.95 282.128,119.399 285.52,108.965 276.642,102.514 287.614,102.514 	"/>
                                    <polygon style="fill:#F0F0F0;" points="326.026,92.08 329.417,102.514 340.389,102.514 331.513,108.965 334.904,119.399
                                        326.026,112.95 317.149,119.399 320.54,108.965 311.664,102.514 322.635,102.514 	"/>
                                    <polygon style="fill:#F0F0F0;" points="255.985,55.652 259.375,66.088 270.348,66.088 261.471,72.537 264.861,82.973
                                        255.985,76.524 247.107,82.973 250.499,72.537 241.621,66.088 252.594,66.088 	"/>
                                    <polygon style="fill:#F0F0F0;" points="291.006,55.652 294.397,66.088 305.368,66.088 296.492,72.537 299.883,82.973
                                        291.006,76.524 282.128,82.973 285.52,72.537 276.642,66.088 287.614,66.088 	"/>
                                    <polygon style="fill:#F0F0F0;" points="326.026,55.652 329.417,66.088 340.389,66.088 331.513,72.537 334.904,82.973
                                        326.026,76.524 317.149,82.973 320.54,72.537 311.664,66.088 322.635,66.088 	"/>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                                        </svg>



                            O'ZBEK
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="border-profile-tab" data-toggle="tab" href="#border-profile" role="tab" aria-controls="border-profile" aria-selected="false">
                            <svg class="lang12" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <circle style="fill:#F0F0F0;" cx="256" cy="256" r="256"/>
                                <path style="fill:#0052B4;" d="M496.077,345.043C506.368,317.31,512,287.314,512,256s-5.632-61.31-15.923-89.043H15.923
                                        C5.633,194.69,0,224.686,0,256s5.633,61.31,15.923,89.043L256,367.304L496.077,345.043z"/>
                                <path style="fill:#D80027;" d="M256,512c110.071,0,203.906-69.472,240.077-166.957H15.923C52.094,442.528,145.929,512,256,512z"/>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                    </svg>
                            РУССКИЙ


                        </a>
                    </li>
                </ul>
                <div class="tab-content mb-4" id="border-tabsContent">
                    <div class="tab-pane fade" id="border-home" role="tabpanel" aria-labelledby="border-home-tab">
                        <?= $form->field($model, 'name_uz')->textarea(['rows' => 1]) ?>
                        <?= $form->field($model, 'text_uz')->widget(CKEditor::className(), [

                            'editorOptions' => ElFinder::ckeditorOptions('elfinder'),


                        ]);?>
                    </div>
                    <div class="tab-pane fade" id="border-profile" role="tabpanel" aria-labelledby="border-profile-tab">

                        <?= $form->field($model, 'name_ru')->textarea(['rows' => 1]) ?>
                        <?= $form->field($model, 'text_ru')->widget(CKEditor::className(), [

                            'editorOptions' => ElFinder::ckeditorOptions('elfinder'),


                        ]);?>
                    </div>
                    <div class="tab-pane fade active show" id="border-contact" role="tabpanel" aria-labelledby="border-contact-tab">
                        <?= $form->field($model, 'name_en')->textarea(['rows' => 1]) ?>
                        <?= $form->field($model, 'text_en')->widget(CKEditor::className(), [
                            'editorOptions' => ElFinder::ckeditorOptions('elfinder'),
                        ]);?>
                    </div>
                </div>
                <div class="row text-center col-md-offset-2">
                    <div class="gallery col-md-12"></div>
                </div>

                <?= $form->field($model, 'imageFile')->widget(FileInput::classname(), ['options' => ['accept' => 'image/*'],]); ?>


                <div class="form-group">
                    <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>



