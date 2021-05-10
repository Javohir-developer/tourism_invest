<?php

namespace common\modules\settings\models;

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
 * This is the ActiveQuery class for [[Values]].
 *
 * @see Values
 */
class ValuesQuery extends \yii\db\ActiveQuery
{
    public function behaviors() {
        return [
            \oks\langs\components\QueryBehavior::className(),
        ];
    }
    public function active()
    {
        return $this->andWhere('[[status]]=1');
    }

    /**
     * @inheritdoc
     * @return Values[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Values|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }


    public function statuses($status = null){
        if($status == ValuesQuery::STATUS_ACTIVE):
            return __('Active');
        else:
            return __('Deactive');
        endif;
    }
}
