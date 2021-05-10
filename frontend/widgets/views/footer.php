<?php

use common\models\Faq;
use common\modules\settings\models\Settings;
?>
<footer>
    <div class="bcontainer">
        <div class="items">
            <div class="item">
                <div class="left_block">
                    <div class="img">
                        <img src="<?=Settings::value('1logo')[0]->src('low')?>">
                    </div>
                    <div class="left_title">
                        <div class="title">
                            <span><?=Settings::value('1text-head')?></span>
                        </div>
                    </div>
                </div>
                <div class="text_block"><?=Settings::value('1text-on-the-footer')?></div>
            </div>
            <?php
            $menu_frontend_header = new \common\modules\menu\components\MenuFooterPortal(['alias' => 'footer-menu-portal', 'without_cache' => true]);
            ?>
            <div class="item">
                <ul>
                    <li><a><?=Settings::value('1phone-number')?></a>
                    </li>
                    <li><a><?=Settings::value('1adress')?></a>
                    </li>
                    <li><a><?=Settings::value('1email')?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>