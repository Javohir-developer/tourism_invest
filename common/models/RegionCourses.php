<?php

namespace common\models;

use common\components\InputModelBehavior;
use oks\langs\components\ModelBehavior;
use oks\langs\models\Langs;
use Yii;

/**
 * This is the model class for table "region_courses".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $link
 * @property string $image
 * @property string $slug
 * @property string $lang_hash
 * @property int $lang
 */
class RegionCourses extends \yii\db\ActiveRecord
{
    private $_regionsimagespostersdata;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'region_courses';
    }

    public function behaviors()
    {
        return ([
            'lang' => [
                'class' => ModelBehavior::className(),
                'fill' => [
                    'image' => '',
                ],
            ],
            'file_manager_model' => [
                'class' => InputModelBehavior::className(),
                'delimitr' => ','
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lang'], 'integer'],
            [['title', 'description', 'link', 'image', 'slug', 'lang_hash'], 'string', 'max' => 1024],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'link' => 'Link',
            'image' => 'Image',
            'slug' => 'Slug',
            'lang_hash' => 'Lang Hash',
            'lang' => 'Lang',
        ];
    }

    public function getLang()
    {
        return $this->hasOne(Langs::className(), ['id' => 'lang']);
    }

    public function getregionsimagespostersdata(){
        return $this->_regionsimagespostersdata;
    }

    public function setregionsimagespostersdata($value){
        return $this->_regionsimagespostersdata = $value;
    }
}