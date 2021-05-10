<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 19.10.2018
 * Time: 23:29
 */

?>
<section class="eror_menu">
    <div class="container">
        <div class="close_button"></div>
        <div class="wrapper">
            <div class="row">
                <?php
                $sitemap = new \common\modules\menu\components\MenuError(['alias' => '404-menu', 'without_cache' => true])
                ?>
            </div>
        </div>
    </div>
</section>
