<?php

namespace common\models;

use oks\filemanager\behaviors\InputModelBehavior;
use oks\langs\components\Lang;
use oks\langs\components\ModelBehavior;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "usefull_links".
 *
 * @property int $id
 * @property string $title
 * @property string $image
 * @property string $link
 * @property int $status
 * @property int $type
 * @property int $order
 * @property int $lang
 * @property string $lang_hash
 * @property int $created_at
 * @property int $updated_at
 */
class UsefullLinks extends \yii\db\ActiveRecord
{
    private $_usefulllinksimagespostersdata;

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            'lang' => [
                'class' => ModelBehavior::className(),
                'fill' => [
                    'status' => '',
                    'image' => '',
                ],
            ],
            'file_manager_model' => [
                'class' => InputModelBehavior::className(),
                'delimitr' => ','
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usefull_links';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image'], 'required'],
            [['status', 'order', 'lang', 'created_at', 'updated_at', 'type'], 'integer'],
            [['title', 'image', 'link'], 'string', 'max' => 255],
            [['lang_hash'], 'string', 'max' => 60],
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
            'image' => 'Image',
            'link' => 'Link',
            'status' => 'Status',
            'type' => 'Type',
            'order' => 'Order',
            'lang' => 'Lang',
            'lang_hash' => 'Lang Hash',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getusefulllinksimagespostersdata(){
        return $this->_usefulllinksimagespostersdata;
    }
    public function setusefulllinksimagespostersdata($value){
        return $this->_usefulllinksimagespostersdata = $value;
    }

    public static function getUsefulLinks($limit) {
        return self::find()->where(['status' => 1, 'lang' => Lang::getLangId(), 'type' => 1])->limit($limit)->all();
    }

    public static function getPartners($limit) {
        return self::find()->where(['status' => 1, 'lang' => Lang::getLangId(), 'type' => 0])->limit($limit)->all();
    }
}
