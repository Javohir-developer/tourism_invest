<?php
/**
 * @var $banner common\models\Slider
 */
use oks\categories\models\Categories;
?>

<div class="col-md-3">
    <div class="gallary_sidebar">
        <div class="frame">
            <ul>
                <?php
                $category = Categories::find()->where(['lang' => \oks\langs\components\Lang::getLangId()])->roots()->addOrderBy('root, lft')->all();
                foreach ($category as $item) :
                    ?>
                    <?php if($childs = $item->children()->all()) :
                        foreach ($childs as $child) :
                    ?>
                        <li><a href="#"><?=$child->name?></a></li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php foreach ($banners as $banner) : ?>
            <a href="<?=$banner->link?>">
                <div class="reclam">
                    <?php $image = $banner->allFiles('image')?>
                    <img src="<?=$image[0]->src('normal')?>" alt="">
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>