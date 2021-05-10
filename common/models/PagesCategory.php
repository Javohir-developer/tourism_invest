<?php

namespace common\models;

use oks\categories\models\Categories;
use Yii;

/**
 * This is the model class for table "pages_categories".
 *
 * @property int $pages_id
 * @property int $category_id

 */
class PagesCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pages_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pages_id', 'category_id'], 'required'],
            [['pages_id', 'category_id'], 'default', 'value' => null],
            [['pages_id', 'category_id'], 'integer'],
            [['pages_id', 'category_id'], 'unique', 'targetAttribute' => ['pages_id', 'category_id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['id' => 'category_id']],
            [['pages_id'], 'exist', 'skipOnError' => true, 'targetClass' => Post::className(), 'targetAttribute' => ['pages_id' => 'pages_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pages_id' => 'Page ID',
            'category_id' => 'Category ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPost()
    {
        return $this->hasOne(Pages::className(), ['id' => 'pages_id']);
    }

}
