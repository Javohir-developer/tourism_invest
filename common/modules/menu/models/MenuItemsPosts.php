<?php

namespace common\modules\menu\models;


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
 * This is the model class for table "menu_itemsposts".
 *
 * @property int $menu_item_id
 * @property int $post_id
 * @property int $sort
 *
 * @property MenuItems $menuItem
 * @property Posts $post
 */
class MenuItemsPosts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu_itemsposts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['menu_item_id', 'post_id'], 'required'],
            [['menu_item_id', 'post_id', 'sort'], 'default', 'value' => null],
            [['menu_item_id', 'post_id', 'sort'], 'integer'],
            [['menu_item_id', 'post_id'], 'unique', 'targetAttribute' => ['menu_item_id', 'post_id']],
            [['menu_item_id'], 'exist', 'skipOnError' => true, 'targetClass' => MenuItems::className(), 'targetAttribute' => ['menu_item_id' => 'menu_item_id']],
            [['post_id'], 'exist', 'skipOnError' => true, 'targetClass' => Posts::className(), 'targetAttribute' => ['post_id' => 'post_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'menu_item_id' => 'Menu Item ID',
            'post_id' => 'Post ID',
            'sort' => 'Sort',
        ];
    }



    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenuItem()
    {
        return $this->hasOne(MenuItems::className(), ['menu_item_id' => 'menu_item_id'])->inverseOf('menuItemsPosts');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPost()
    {
        return $this->hasOne(Posts::className(), ['post_id' => 'post_id'])->inverseOf('menuItemsPosts');
    }
}
