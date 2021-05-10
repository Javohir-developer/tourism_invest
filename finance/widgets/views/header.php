<?php
use common\modules\settings\models\Settings;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

?>
<header>
    <div class="top">
        <div class="bcontainer">
            <div class="left">
                <div class="lang">
                    <div class="choose_lang">
                        <div class="uz current_lang">
                            <?php foreach ($langs as $lang) : ?>
                                <?php if (Yii::$app->language == $lang->code) echo $lang->name;?>
                            <?php endforeach; ?>
                        </div>
                        <?php foreach ($langs as $lang) : ?>
                            <?php if (Yii::$app->language !== $lang->code) : ?>
                                <a href="<?= Url::current(['language' => $lang->code])?>" class="oz"><?=$lang->name?></a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="social_set">
                    <!--<a href="<?/*=Settings::value('twitter-social')*/?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12.95" height="10.519" viewBox="0 0 12.95 10.519">
                            <g id="twitter-logo-silhouette" transform="translate(-0.001 -57.441)">
                                <g id="Group_2" data-name="Group 2" transform="translate(0.001 57.441)">
                                    <path id="Path_26" data-name="Path 26" d="M12.951,58.686a5.305,5.305,0,0,1-1.525.418,2.668,2.668,0,0,0,1.168-1.469,5.355,5.355,0,0,1-1.688.645A2.659,2.659,0,0,0,6.378,60.7,7.542,7.542,0,0,1,.9,57.927a2.66,2.66,0,0,0,.822,3.546,2.657,2.657,0,0,1-1.2-.333v.033a2.659,2.659,0,0,0,2.131,2.6,2.691,2.691,0,0,1-.7.093,2.549,2.549,0,0,1-.5-.049,2.658,2.658,0,0,0,2.481,1.845A5.33,5.33,0,0,1,.635,66.8,5.645,5.645,0,0,1,0,66.765a7.509,7.509,0,0,0,4.072,1.2A7.506,7.506,0,0,0,11.631,60.4l-.009-.344A5.3,5.3,0,0,0,12.951,58.686Z"
                                          transform="translate(-0.001 -57.441)" fill="#fff" />
                                </g>
                            </g>
                        </svg>
                    </a>
                    <a href="<?/*=Settings::value('facebook-social')*/?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="6.915" height="12.789" viewBox="0 0 6.915 12.789">
                            <g id="facebook-logo" transform="translate(-22.077)">
                                <path id="Path_27" data-name="Path 27" d="M28.731,0,27.073,0a2.913,2.913,0,0,0-3.067,3.148V4.6H22.338a.261.261,0,0,0-.261.261v2.1a.261.261,0,0,0,.261.261h1.668v5.306a.261.261,0,0,0,.261.261h2.176a.261.261,0,0,0,.261-.261V7.223h1.95a.261.261,0,0,0,.261-.261V4.86a.261.261,0,0,0-.261-.261H26.7V3.369c0-.591.141-.891.911-.891h1.117a.261.261,0,0,0,.261-.261V.263A.261.261,0,0,0,28.731,0Z"
                                      fill="#fff" />
                            </g>
                        </svg>
                    </a>
                    <a href="<?/*=Settings::value('telegram-social')*/?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11.371" height="9.9" viewBox="0 0 11.371 9.9">
                            <g id="telegram" transform="translate(0 -19.401)">
                                <path id="XMLID_497_" d="M.2,24.148l2.62.978,1.014,3.262a.308.308,0,0,0,.49.147l1.461-1.191a.436.436,0,0,1,.531-.015l2.634,1.913a.309.309,0,0,0,.484-.187l1.93-9.282a.309.309,0,0,0-.414-.351L.2,23.57A.309.309,0,0,0,.2,24.148Zm3.471.457,5.121-3.154a.089.089,0,0,1,.108.141L4.674,25.521a.876.876,0,0,0-.272.524l-.144,1.067A.132.132,0,0,1,4,27.131l-.554-1.945A.516.516,0,0,1,3.672,24.605Z"
                                      fill="#fff" />
                            </g>
                        </svg>
                    </a>-->
                    <!--<a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9.801" height="9.8" viewBox="0 0 9.801 9.8">
                            <g id="rss-symbol" transform="translate(0 -0.02)">
                                <g id="Group_3" data-name="Group 3" transform="translate(0 0.02)">
                                    <path id="Path_28" data-name="Path 28" d="M1.336,292.382a1.289,1.289,0,0,0-.947.39,1.344,1.344,0,0,0,0,1.893,1.289,1.289,0,0,0,.947.39,1.289,1.289,0,0,0,.947-.39,1.344,1.344,0,0,0,0-1.893A1.289,1.289,0,0,0,1.336,292.382Z"
                                          transform="translate(0 -285.255)" fill="#fff" />
                                    <path id="Path_29" data-name="Path 29" d="M4.413,148.024a6.154,6.154,0,0,0-1.8-1.263,6.24,6.24,0,0,0-2.13-.56H.445a.406.406,0,0,0-.3.118.41.41,0,0,0-.146.327v.94a.428.428,0,0,0,.115.3.423.423,0,0,0,.289.139,4.329,4.329,0,0,1,2.725,1.284,4.328,4.328,0,0,1,1.284,2.725.435.435,0,0,0,.438.4h.94a.41.41,0,0,0,.327-.146.422.422,0,0,0,.119-.334,6.244,6.244,0,0,0-.56-2.13A6.155,6.155,0,0,0,4.413,148.024Z"
                                          transform="translate(0 -142.637)" fill="#fff" />
                                    <path id="Path_30" data-name="Path 30" d="M8.964,5.863A9.758,9.758,0,0,0,6.918,2.9,9.757,9.757,0,0,0,3.957.855,9.659,9.659,0,0,0,.466.02H.445A.417.417,0,0,0,.139.145.412.412,0,0,0,0,.465v1a.426.426,0,0,0,.122.3.416.416,0,0,0,.3.136,7.886,7.886,0,0,1,2.843.71A8,8,0,0,1,5.6,4.22,8,8,0,0,1,7.21,6.559a7.78,7.78,0,0,1,.7,2.843.417.417,0,0,0,.136.3.435.435,0,0,0,.31.122h1a.411.411,0,0,0,.32-.139A.4.4,0,0,0,9.8,9.354,9.658,9.658,0,0,0,8.964,5.863Z"
                                          transform="translate(0 -0.02)" fill="#fff" />
                                </g>
                            </g>
                        </svg>
                    </a>-->
                </div>
            </div>
            <div class="center">
                <a href="<?=Settings::value('gerb')?>" class="flag"></a>
                <a href="<?=Settings::value('bayroq')?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="13.548" viewBox="0 0 20 13.548">
                        <g id="uzbekistn" transform="translate(0 -80)">
                            <path id="Path_3" data-name="Path 3" d="M0,304v2.645a1.867,1.867,0,0,0,1.935,1.871H18.065A1.867,1.867,0,0,0,20,306.645V304Z" transform="translate(0 -214.968)" fill="#1eb53a" />
                            <path id="Path_4" data-name="Path 4" d="M18.065,80H1.935A1.867,1.867,0,0,0,0,81.871v2.645H20V81.871A1.867,1.867,0,0,0,18.065,80Z" fill="#0099b5" />
                            <rect id="Rectangle_14" data-name="Rectangle 14" width="20" height="4.516" transform="translate(0 84.516)" fill="#fff" />
                            <path id="Path_5" data-name="Path 5" d="M320.555,308.516a1.867,1.867,0,0,0,1.935-1.871V304H315.2Z" transform="translate(-302.49 -214.968)" fill="#11a325" />
                            <path id="Path_6" data-name="Path 6" d="M64.129,80H48l5.323,4.516H66.064V81.871A1.867,1.867,0,0,0,64.129,80Z" transform="translate(-46.065)" fill="#078c9e" />
                            <path id="Path_7" data-name="Path 7" d="M185.452,196.516h7.29V192H180Z" transform="translate(-172.742 -107.484)" fill="#e1eae2" />
                            <path id="Path_8" data-name="Path 8" d="M64.129,80H48l14.935,4.516h3.129V81.871A1.867,1.867,0,0,0,64.129,80Z" transform="translate(-46.065)" fill="#048089" />
                            <path id="Path_9" data-name="Path 9" d="M417.69,192.9V192H414.4Z" transform="translate(-397.69 -107.484)" fill="#c2cec3" />
                            <path id="Path_10" data-name="Path 10" d="M20,368.032a1.819,1.819,0,0,1-1.935,1.9H1.935A1.921,1.921,0,0,1,0,368" transform="translate(0 -276.387)" fill="#098914" />
                            <rect id="Rectangle_15" data-name="Rectangle 15" width="20" height="0.323" transform="translate(0 84.194)" fill="#ce1126" />
                            <path id="Path_11" data-name="Path 11" d="M170.019,184.323h12.742V184H169.6Z" transform="translate(-162.761 -99.806)" fill="#a8071e" />
                            <rect id="Rectangle_16" data-name="Rectangle 16" width="20" height="0.323" transform="translate(0 89.032)" fill="#ce1126" />
                            <path id="Path_12" data-name="Path 12" d="M315.2,304l.387.323h6.9V304Z" transform="translate(-302.49 -214.968)" fill="#a8071e" />
                            <g id="Group_1" data-name="Group 1" transform="translate(1.581 80.871)">
                                <path id="Path_13" data-name="Path 13" d="M40.652,101.632c-.065,0-.129-.032-.194-.032a1.26,1.26,0,0,0-1.258,1.258,1.24,1.24,0,0,0,1.258,1.258.409.409,0,0,0,.194-.032,1.248,1.248,0,0,1-1.032-1.226A1.223,1.223,0,0,1,40.652,101.632Z"
                                      transform="translate(-39.2 -101.6)" fill="#fff" />
                                <path id="Path_14" data-name="Path 14" d="M83.49,151.361l-.065-.161-.065.161H83.2l.129.129-.032.161.129-.1.161.1-.065-.161.161-.129Z" transform="translate(-81.426 -149.2)" fill="#fff" />
                                <path id="Path_15" data-name="Path 15" d="M108.29,151.361l-.065-.161-.065.161H108l.129.129-.032.161.129-.1.161.1-.065-.161.129-.129Z" transform="translate(-105.226 -149.2)" fill="#fff" />
                                <path id="Path_16" data-name="Path 16" d="M133.09,151.361l-.065-.161-.065.161H132.8l.129.129-.065.161.161-.1.161.1-.064-.161.129-.129Z" transform="translate(-129.026 -149.2)" fill="#fff" />
                                <path id="Path_17" data-name="Path 17" d="M157.89,151.361l-.065-.161-.065.161H157.6l.129.129-.065.161.161-.1.161.1-.065-.161.129-.129Z" transform="translate(-152.826 -149.2)" fill="#fff" />
                                <path id="Path_18" data-name="Path 18" d="M182.69,151.361l-.065-.161-.065.161H182.4l.129.129-.065.161.161-.1.129.1-.032-.161.129-.129Z" transform="translate(-176.626 -149.2)" fill="#fff" />
                                <path id="Path_19" data-name="Path 19" d="M108.226,126.4l-.032.161H108l.161.129-.065.161.129-.1.161.1-.065-.161.161-.129h-.194Z" transform="translate(-105.226 -125.4)" fill="#fff" />
                                <path id="Path_20" data-name="Path 20" d="M133.026,126.4l-.032.161H132.8l.161.129-.065.161.129-.1.161.1-.064-.161.161-.129h-.194Z" transform="translate(-129.026 -125.4)" fill="#fff" />
                                <path id="Path_21" data-name="Path 21" d="M157.826,126.4l-.032.161H157.6l.161.129-.065.161.129-.1.161.1-.065-.161.161-.129h-.194Z" transform="translate(-152.826 -125.4)" fill="#fff" />
                                <path id="Path_22" data-name="Path 22" d="M182.69,126.561l-.065-.161-.032.161H182.4l.129.129-.032.161.129-.1.161.1-.065-.161.161-.129Z" transform="translate(-176.626 -125.4)" fill="#fff" />
                                <path id="Path_23" data-name="Path 23" d="M132.161,101.89l-.065.161.161-.1.129.1-.032-.161.129-.129h-.161l-.065-.161-.065.161H132Z" transform="translate(-128.258 -101.6)" fill="#fff" />
                                <path id="Path_24" data-name="Path 24" d="M156.961,101.89l-.065.161.161-.1.129.1-.032-.161.129-.129h-.161l-.065-.161-.065.161H156.8Z" transform="translate(-152.058 -101.6)" fill="#fff" />
                                <path id="Path_25" data-name="Path 25" d="M181.761,101.89l-.065.161.161-.1.129.1-.032-.161.129-.129h-.194l-.032-.161-.065.161H181.6Z" transform="translate(-175.858 -101.6)" fill="#fff" />
                            </g>
                        </g>
                    </svg>
                </a>
                <a href="<?=Settings::value('madhiya')?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14.373" height="15.5" viewBox="0 0 14.373 15.5">
                        <path id="music-player" d="M16.277.071A.285.285,0,0,0,16.055,0L7.318,1.133a.282.282,0,0,0-.245.279V11.449a2.925,2.925,0,0,0-2.255-1.021A2.691,2.691,0,0,0,2,12.964,2.691,2.691,0,0,0,4.818,15.5a2.691,2.691,0,0,0,2.818-2.536c0-.065-.005-.13-.011-.194a.271.271,0,0,0,.011-.054V4.543l8.173-1.058V8.63A2.925,2.925,0,0,0,13.555,7.61a2.691,2.691,0,0,0-2.818,2.536,2.691,2.691,0,0,0,2.818,2.536,2.7,2.7,0,0,0,2.816-2.5s0-.007,0-.01V.282A.281.281,0,0,0,16.277.071Z"
                              transform="translate(-2 -0.001)" fill="#078c9e" />
                    </svg>
                </a>
                <div class="acces">
                    <svg xmlns="http://www.w3.org/2000/svg" width="33.176" height="12.974" viewBox="0 0 33.176 12.974">
                        <g id="mask" transform="translate(-963.501 657.973)">
                            <path id="Path_33" data-name="Path 33" d="M30.645,5.179H28.854a6.494,6.494,0,0,0-12.725.032,5.615,5.615,0,0,0-2.081,0A6.489,6.489,0,0,0,3.3,1.706,6.526,6.526,0,0,0,1.35,5.058H-.467a1.068,1.068,0,0,0,0,2.136h1.7a6.559,6.559,0,0,0,4.241,5.4,6.5,6.5,0,0,0,8.638-5.183,2.681,2.681,0,0,1,1.959,0,6.493,6.493,0,0,0,12.866-.094h1.711a1.068,1.068,0,0,0,0-2.136ZM7.683,10.844a4.354,4.354,0,0,1-2.794-7.7A4.355,4.355,0,0,1,11.963,7.3a4.4,4.4,0,0,1-4.28,3.545Zm14.812,0a4.354,4.354,0,0,1-2.794-7.7A4.356,4.356,0,0,1,26.775,7.3a4.4,4.4,0,0,1-4.28,3.545Zm0,0"
                                  transform="translate(965 -657.974)" fill="#fff" />
                        </g>
                    </svg>
                    <div class="dropdown-menu_ specialViewArea no-propagation">
                        <div class="accessibility_frame_block">
                            <div class="appearance">
                                <p class="specialTitle"><?=__('Ko\'rinish')?></p>
                                <div class="accessibility_item">
                                    <div class="squareAppearances">
                                        <div class="squareBox spcNormal">A</div>
                                    </div>
                                    <div class="squareAppearances">
                                        <div class="squareBox spcWhiteAndBlack">A</div>
                                    </div>
                                    <div class="squareAppearances">
                                        <div class="squareBox spcDark">A</div>
                                    </div>
                                    <div class="squareAppearances">
                                        <div class="squareBox spcNoImage"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="appearance1">
                                <p class="specialTitle"><?=__('Shrift o\'lchami')?></p>
                                <div class="block">
                                    <div class="sliderText"><span class="range">0</span> %<?=__(' ga kattalashtirish')?></div>
                                    <div id="fontSizer" class="defaultSlider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width:0%"></div><span class="ui-slider-handle ui-state-default ui-corner-all" style="left:0"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
<!--                <div class="title">--><?//=__('Портал Учебного центра')?><!--</div>-->
<!--                <div class="link"><a href="--><?//=Url::to('http://www.lms.tcmf.uz')?><!--">--><?//=__('Войти')?><!--</a>-->
<!--                </div>-->
            </div>
        </div>
    </div>
    <div class="middle">
        <div class="bcontainer">
            <a href="<?=Url::to('/'.Yii::$app->language)?>" class="left">
                <div class="img">
                    <img src="<?= count(Settings::value('logo')) > 0 ? Settings::value('logo')[0]->getSrc('low') : ''?>" alt="logo">
                </div>
                <div class="title">
                    <div class="title"><?=Settings::value('text-head')?></div>
                </div>
            </a>
            <div class="right">
                <div class="small_text"><?=__('Для информации')?></div>
                <div class="big_text"><?=Settings::value('phone-number')?></div>
                <div class="small_text massage_icon"><?=Settings::value('email')?></div>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="bcontainer">
            <div class="menu_bar">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M491.318,235.318H20.682C9.26,235.318,0,244.577,0,256s9.26,20.682,20.682,20.682h470.636

        c11.423,0,20.682-9.259,20.682-20.682C512,244.578,502.741,235.318,491.318,235.318z" />
                            </g>
                        </g>
                    <g>
                        <g>
                            <path d="M491.318,78.439H20.682C9.26,78.439,0,87.699,0,99.121c0,11.422,9.26,20.682,20.682,20.682h470.636

        c11.423,0,20.682-9.26,20.682-20.682C512,87.699,502.741,78.439,491.318,78.439z" />
                        </g>
                    </g>
                    <g>
                        <g>
                            <path d="M491.318,392.197H20.682C9.26,392.197,0,401.456,0,412.879s9.26,20.682,20.682,20.682h470.636

        c11.423,0,20.682-9.259,20.682-20.682S502.741,392.197,491.318,392.197z" />
                        </g>
                    </g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    <g></g>
                    </svg>
            </div>
            <ul><?php
                $menu_frontend_header = new \common\modules\menu\components\MenuHeader(['alias' => 'header-menu', 'without_cache' => true]);
            ?></ul>
            <div class="search_button"></div>
        </div>
    </div>
    <div class="wrapper_header_search_block">
        <div class="header_search_block">
            <form action="<?=Url::to('/site/search')?>" method="get" name="search-form">
                <div class="input_block">
                    <input type="text" name="input" placeholder="<?=__('Поиск по сайту')?>">
                    <button></button>
                </div>
            </form>
        </div>
        <div class="search_overlay"></div>
    </div>
</header>

