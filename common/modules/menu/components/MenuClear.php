<?php
namespace common\modules\menu\components;

use frontend\components\View;
use oks\langs\models\Langs;
use Yii;
use common\modules\menu\components\MenuRender;
use yii\helpers\Html;

class MenuHeader extends MenuRender{

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
        if($this->has_child):
            echo '';
        else:
            echo '';
        endif;
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