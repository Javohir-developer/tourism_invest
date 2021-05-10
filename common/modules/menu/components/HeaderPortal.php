<?php
namespace common\modules\menu\components;

use finance\components\View;
use oks\langs\models\Langs;
use Yii;
use common\modules\menu\components\MenuRender;
use yii\helpers\Html;
use yii\helpers\Url;

class HeaderPortal extends MenuRender{

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
        if (Url::current() == $this->item->url) {
            echo '<li><a href="'.$this->item->url.'" class="active_menu">'.$this->item->title.'</a></li>';
        } else {
            echo '<li><a href="'.$this->item->url.'">'.$this->item->title.'</a></li>';
        }
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