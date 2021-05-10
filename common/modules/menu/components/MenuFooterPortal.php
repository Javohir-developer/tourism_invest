<?php
namespace common\modules\menu\components;

use oks\langs\models\Langs;
use Yii;
use common\modules\menu\components\MenuRender;
class MenuFooterPortal extends MenuRender
{
    public function beforeRenderMenu()
    {
        echo '';
    }

    public  function afterRenderMenu()
    {
        echo '';
    }

    public function beginRenderItem()
    {
        if($this->has_child):
            echo '<div class="item">
                <h2>'.$this->item->title.'</h2> 
                    ';
        else:
            echo '<div class="item">
                <h2>'.$this->item->title.'</h2>';
        endif;
    }

    public function endRenderItem()
    {
            echo "</div>";
    }

    public function beforeRenderItemChilds()
    {
        echo '<ul>';
    }

    public function beginRenderItemChild()
    {
        if($this->is_active()):
            echo '<li><a href="'.$this->item->url.'">'.$this->item->title.'</a>
                    </li>';
        else:
            echo '<li><a href="'.$this->item->url.'">'.$this->item->title.'</a>';
        endif;
    }

    public function endRenderItemChild()
    {

        echo '</li>';
    }

    public function afterRenderItemChilds()
    {
        echo '</ul>';
    }
}