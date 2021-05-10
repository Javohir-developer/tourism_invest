<?php

use common\models\Faq;
use common\modules\settings\models\Settings;
?>
<footer>
    <div class="footer_top">
        <div class="middle">
            <div class="bcontainer">
                <a href="<?=\yii\helpers\Url::home()?>" class="left">
                    <div class="img">
                        <img src="<?=count(Settings::value('logo')) ? Settings::value('logo')[0]->getSrc('low') : ''?>" alt="logo">
                    </div>
                    <div class="title">
                        <div class="title"><?=Settings::value('text-head')?></div>
                    </div>
                </a>
                <div class="right">
                    <div class="small_text">Для информации</div>
                    <div class="big_text"><?=Settings::value('phone-number')?></div>
                    <div class="small_text massage_icon"><?=Settings::value('email')?></div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="bcontainer">
                <ul>
                    <li>
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
                    </li>
                    <?php
                    $menu_frontend_header = new \common\modules\menu\components\FooterMenu(['alias' => 'header-menu', 'without_cache' => true]);
                    ?>
                </ul>
                <div class="last_li"><?= __('Для звонков по Узбекистану') ?></div>
                <form action="" class="search">
                    <div class="input_block">
                        <input type="text" placeholder="SEARCH">
                    </div>
                    <button class="search_button"></button>
                </form>
            </div>
        </div>
    </div>
    <div class="footer_middle">
        <div class="bcontainer">
            <div class="left">
            <?php
                $menu_footer = new \common\modules\menu\components\MenuFooter(['alias' => 'footer-menu', 'without_cache' => true]);
            ?>
            </div>
            <div class="right">
                <div class="title"><?=__('НАШЕ ГЕОПОЗИЦИЯ')?></div>
                <div class="map">
                    <?=Settings::value('1map')?>
                </div>
                <div class="address"><?=Settings::value('adress')?></div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="bcontainer">
            <div class="top">
<!--                --><?//=__('ИНФОРМАЦИЯ')?>
            </div>
<!--            <div class="middle">--><?//=__('"Здесь ваш текст.. ." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, Некоторые версии появились')?><!--</div>-->
            <div class="bottom">
                <div class="left"><?=Settings::value('text-on-the-footer')?></div>
                <div
                        class="right">
                    <ul style="justify-content: end;
">
                        <!--<li>
                            <a href="<?/*=Settings::value('facebook-social')*/?>">
                                <img src="<?/*=$this->getImageUrl('img/fc.svg')*/?>" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="<?/*=Settings::value('')*/?>">
                                <img src="<?/*=$this->getImageUrl('img/ok.svg')*/?>" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="<?/*=Settings::value('twitter-social')*/?>">
                                <img src="<?/*=$this->getImageUrl('img/twitter.svg')*/?>" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="<?/*=Settings::value('telegram-social')*/?>">
                                <img src="<?/*=$this->getImageUrl('img/telegram.svg')*/?>" alt="">
                            </a>
                        </li>-->
                        <li>
                            <a href="<?=\yii\helpers\Url::to('https://oks.uz')?>">
                                <img src="<?=$this->getImageUrl('img/oks.svg')?>" alt="Разработка веб сайтов">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
