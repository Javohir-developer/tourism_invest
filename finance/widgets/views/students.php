

<div class="home_studets_and_abuturents">
    <div class="bcontainer">
        <div class="home_studets_and_abuturents_left">
            <div class="title"><?=__('Студентларга')?></div>
            <ul>
                <?php
                $menu_frontend_header = new \common\modules\menu\components\MenuStudents(['alias' => 'menu-students', 'without_cache' => true]);
                ?>
            </ul>
        </div>
        <div class="home_studets_and_abuturents_right">
            <div class="title"><?=__('Абитуриентларга')?></div>
            <ul>
                <?php
                $menu_frontend_header = new \common\modules\menu\components\MenuStudents1(['alias' => 'menu-students1', 'without_cache' => true]);
                ?>
            </ul>
        </div>
    </div>
</div>
