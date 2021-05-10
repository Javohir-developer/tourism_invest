<?php

namespace common\modules\menu\models;

use Yii;
use \yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\behaviors\SluggableBehavior;
//Системные
use oks\core\behaviors\DateTimeBehavior;
use oks\core\behaviors\UserBehavior;
//Файлы
use oks\filemanager\behaviors\FileModelBehavior;
use oks\filemanager\models\Files;
//Языки
use oks\langs\models\Langs;
use oks\langs\components\ModelBehavior;
//Пользовтели
use oks\users\models\Users;
//Категории
use oks\categories\behaviors\CategoryModelBehavior;
use oks\categories\models\Categories;

/**
 * This is the ActiveQuery class for [[Menu]].
 *
 * @see Menu
 */
class MenuQuery extends \yii\db\ActiveQuery
{
    public function behaviors() {
        return [
            'lang' => [
                'class' => \oks\langs\components\QueryBehavior::className(),
                'alias' => Menu::tableName()
            ],
        ];
    }
    public function active()
    {
        return $this->andWhere('[[status]]=1');
    }

    /**
     * @inheritdoc
     * @return Menu[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Menu|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }


    public function statuses($status = null){
        if($status == MenuQuery::STATUS_ACTIVE):
            return __('Active');
        else:
            return __('Deactive');
        endif;
    }
    public function types(){
        $types[] = "Site";
        return $types;
    }
    public function alias($alias = null){
        return $this->where(['alias' => $alias])->lang()->one();
    }
}
