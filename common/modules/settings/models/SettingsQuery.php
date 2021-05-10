<?php

namespace common\modules\settings\models;

use Yii;
use \yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\behaviors\SluggableBehavior;
//Системные
use jakharbek\core\behaviors\DateTimeBehavior;
use jakharbek\core\behaviors\UserBehavior;
//Файлы
use jakharbek\filemanager\behaviors\FileModelBehavior;
use jakharbek\filemanager\models\Files;
//Языки
use jakharbek\langs\models\Langs;
use jakharbek\langs\components\ModelBehavior;
//Пользовтели
use jakharbek\users\models\Users;
//Категории
use jakharbek\categories\behaviors\CategoryModelBehavior;
use jakharbek\categories\models\Categories;
//Теги
use jakharbek\tags\behaviors\TagsModelBehavior;
use jakharbek\tags\models\Tags;
//Темы
use jakharbek\topics\behaviors\TopicModelBehavior;
use jakharbek\topics\models\Topics;
//Видео
use common\modules\videos\models\Videos;
/**
 * This is the ActiveQuery class for [[Settings]].
 *
 * @see Settings
 */
class SettingsQuery extends \yii\db\ActiveQuery
{
    public function behaviors() {
        return [
            'lang' => [
                'class' => \oks\langs\components\QueryBehavior::className(),
                'alias' => Settings::tableName()
            ],
        ];
    }
    public function active()
    {
        return $this->andWhere('[[status]]=1');
    }

    /**
     * @inheritdoc
     * @return Settings[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Settings|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }


    public function statuses($status = null){
        if($status == SettingsQuery::STATUS_ACTIVE):
            return Yii::t('jakhar-posts','Active');
        else:
            return Yii::t('jakhar-posts','Deactive');
        endif;
    }

    public function types(){
        return [
            1 => __('center-site'),
            2 => __('center-header'),
            3 => __('center-footer'),
            4 => __('center-social'),
            5 => __('portal-site'),
            6 => __('portal-header'),
            7 => __('portal-footer'),
            8 => __('portal-social'),
        ];
    }
    public function inputs(){
        return [
            1 => 'input',
            2 => 'select',
            5 => 'textarea',
            6 => 'file'
        ];
    }
    public function type($type = 1){
        $this->where(['type' => $type]);
        $this->lang();
        return $this;
    }
    public function slug($slug = null){
        $this->where(['slug' => $slug]);
        $this->lang();
        return $this;
    }
}
