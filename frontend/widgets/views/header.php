<?php
use common\modules\settings\models\Settings;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<header id="header">
    <div class="menu_top">
        <div class="bcontainer">
            <div class="wrapper">
                <div class="left">
                    <div class="email">
                        <div class="img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17.883" height="13.583" viewBox="0 0 17.883 13.583">
                                <path id="message-closed-envelope" d="M15.76,45.945H2.123A2.084,2.084,0,0,0,0,47.983v9.506a2.084,2.084,0,0,0,2.123,2.038H15.76a2.084,2.084,0,0,0,2.123-2.038V47.983A2.084,2.084,0,0,0,15.76,45.945Zm0,11.783H2.123c-.172,0-.323-.112-.323-.239V49.24l6.168,5.207a.7.7,0,0,0,.453.166H9.462a.7.7,0,0,0,.453-.166l6.168-5.208v8.249C16.083,57.616,15.932,57.728,15.76,57.728Zm-6.819-4.9-6-5.082h12Z"
                                      transform="translate(0 -45.945)" fill="#fff" opacity="0.5" />
                            </svg>
                        </div>
                        <div class="text"><?=Settings::value('1email')?></div>
                    </div>
                    <div class="phone">
                        <div class="img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13.9" height="13.905" viewBox="0 0 13.9 13.905">
                                <g id="old-handphone" transform="translate(-0.003 0)" opacity="0.6">
                                    <path id="Path_25" data-name="Path 25" d="M4.368,4.6,1.157,1.391,2.4.146A.493.493,0,0,1,3.1.14l2.5,2.5a.5.5,0,0,1,0,.7l-.548.547-.51.51A1.4,1.4,0,0,0,4.368,4.6ZM7.01,9.836C6.484,9.384,5.98,8.9,5.49,8.415S4.523,7.42,4.07,6.892a1.582,1.582,0,0,1-.25-1.571l-3.3-3.3C-.242,2.813-.144,4.768.7,6.486A12.368,12.368,0,0,0,2.008,8.537a18.387,18.387,0,0,0,1.57,1.793,17.515,17.515,0,0,0,1.789,1.576,12.372,12.372,0,0,0,2.048,1.31c1.72.84,3.676.932,4.464.164l-3.3-3.3A1.589,1.589,0,0,1,7.01,9.836Zm6.752.973-2.5-2.5a.5.5,0,0,0-.7,0h0l-.55.549L9.5,9.367a1.538,1.538,0,0,1-.2.169l3.21,3.212q.623-.624,1.246-1.244A.489.489,0,0,0,13.762,10.809Z"
                                          transform="translate(0 0)" fill="#fff" />
                                </g>
                            </svg>
                        </div>
                        <div class="text"><?=Settings::value('1phone-number')?></div>
                    </div>
                    <div class="lang">
                        <div class="choose_lang">
                                <?php foreach ($langs as $lang) : ?>
                                    <?php if (Yii::$app->language == $lang->code) : ?>
                                        <div class="ru current_lang"><?=$lang->name?></div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <?php foreach ($langs as $lang) : ?>
                                    <?php if (Yii::$app->language !== $lang->code) : ?>
                                        <a href="<?= Url::current(['language' => $lang->code])?>" class="uz"><?=$lang->name?></a>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu_bottom">
        <div class="bcontainer">
            <div class="left">
                <div class="img">
                    <img src="<?=Settings::value('logo')[0]->getSrc('low')?>">
                </div>
                <div class="left_title">
                    <?=Settings::value('1text-head')?>
                </div>
            </div>
            <div class="right">
                <ul class="menu_links">
                    <?php
                    $menu_frontend_header = new \common\modules\menu\components\HeaderPortal(['alias' => 'header-menu-portal', 'without_cache' => true]);
                    ?>
                </ul>
                <ul class="icon_buttons">
                    <li class="search">
                        <form action="<?=Url::to('/site/search')?>" method="get">
                            <button type="submit" class="search_button"></button>
                            <div class="input_block">
                                <input type="text" name="input" placeholder="<?=__('Поиск')?>">
                            </div>
                        </form>
                    </li>
                    <li class="mobile_menu_button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22.608" height="18.086" viewBox="0 0 22.608 18.086">
                            <g id="Group_1" data-name="Group 1" transform="translate(-423 -28)" opacity="0.85">
                                <rect id="Rectangle_4" data-name="Rectangle 4" width="22.608" height="3.014" rx="1.507" transform="translate(423 28)" fill="#3d3e47" />
                                <rect id="Rectangle_5" data-name="Rectangle 5" width="22.608" height="3.014" rx="1.507" transform="translate(423 35.536)" fill="#3d3e47" />
                                <rect id="Rectangle_6" data-name="Rectangle 6" width="22.608" height="3.014" rx="1.507" transform="translate(423 43.072)" fill="#3d3e47" />
                            </g>
                        </svg>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
