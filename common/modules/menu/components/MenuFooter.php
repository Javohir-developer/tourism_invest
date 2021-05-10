<?php
namespace common\modules\menu\components;

use oks\langs\models\Langs;
use Yii;
use common\modules\menu\components\MenuRender;
class MenuFooter extends MenuRender
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
            echo '<ul>
                    <li><a href="'.$this->item->url.'">'.$this->item->title.'</a>
                    </li>';
        else:
            echo '<ul>
                    <li><a href="'.$this->item->url.'">'.$this->item->title.'</a>
                    </li>';
        endif;
    }

    public function endRenderItem()
    {
            echo "</ul>";
    }

    public function beforeRenderItemChilds()
    {
        echo '';
    }

    public function beginRenderItemChild()
    {
        if($this->is_active()):
            echo '<li><a href="'.$this->item->url.'">'.$this->item->title.'</a>';
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
        echo '';
    }
}