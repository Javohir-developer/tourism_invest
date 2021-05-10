<?php
namespace common\modules\menu\components;

use finance\components\View;
use oks\langs\models\Langs;
use Yii;
use common\modules\menu\components\MenuRender;
use yii\helpers\Html;

class SecondMenu extends MenuRender{

    public $photo_id = 0;

    public function beforeRenderMenu()
    {
        echo '';
    }

    public function afterRenderMenu()
    {
        echo '';
    }

    public function beginRenderItem()
    {
        $this->photo_id++;
        echo '<div class="activity_block">
                <a href="/'.Yii::$app->language.$this->item->url.'" class="activity_frame">
                    <img src="'.(new View())->getImageUrl("img/g$this->photo_id.jpg").'" alt="">
                    <div class="activity_mask_color">
                        <div class="img">
                            <img src="'.(new View())->getImageUrl($this->item->icon) .'" alt="">
                        </div>
                        <div class="title">'.$this->item->title.'</div>
                    </div>
                </a>
            </div>';
    }

    public function endRenderItem()
    {
        echo "";
    }

    public function beforeRenderItemChilds()
    {
        echo '';
    }

    public function beginRenderItemChild()
    {
        echo '';
    }

    public function endRenderItemChild()
    {

    }

    public function afterRenderItemChilds()
    {
        echo '';

    }

}