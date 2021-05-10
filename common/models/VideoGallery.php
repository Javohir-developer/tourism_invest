<?php

namespace common\models;

use common\components\InputModelBehavior;
use oks\langs\components\Lang;
use oks\langs\components\ModelBehavior;
use oks\langs\models\Langs;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "video_gallery".
 *
 * @property int $id
 * @property string $name
 * @property string $video
 * @property int $sort
 * @property string $description
 * @property int $status
 * @property string $lang_hash
 * @property int $lang
 * @property string $image
 * @property int $created_at
 * @property int $updated_at
 */
class VideoGallery extends \yii\db\ActiveRecord
{
    const STATUS_ENABLE = 1;
    const STATUS_DISABLE = 0;

    const TYPE_PORTAL = 0;
    const TYPE_CENTER = 1;

    private $_videoimagespostersdata;

    private $_imageimagespostersdata;

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            'lang' => [
                'class' => ModelBehavior::className(),
                'fill' => [
                    'status' => '',
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
        return 'video_gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sort', 'status', 'lang', 'created_at', 'type', 'updated_at'], 'integer'],
            [['description'], 'string'],
            [['name', 'video', 'image', 'slug'], 'string', 'max' => 255],
            [['lang_hash'], 'string', 'max' => 60],
            [
                ['lang'],
                'exist',
                'skipOnError' => true,
                'targetClass' => Langs::className(),
                'targetAttribute' => ['lang' => 'lang_id']
            ],        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'video' => 'Video',
            'image' => 'Image',
            'sort' => 'Sort',
            'slug' => 'Slug',
            'description' => 'Description',
            'status' => 'Status',
            'lang_hash' => 'Lang Hash',
            'lang' => 'Lang',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }


    public function getLang()
    {
        return $this->hasOne(Langs::className(), ['id' => 'lang']);
    }

    public function getvideoimagespostersdata(){
        return $this->_videoimagespostersdata;
    }
    public function setvideoimagespostersdata($value){
        return $this->_videoimagespostersdata = $value;
    }

    public function getimageimagespostersdata(){
        return $this->_imageimagespostersdata;
    }
    public function setimageimagespostersdata($value){
        return $this->_imageimagespostersdata = $value;
    }

    public static function getAllVideos($limit = 3)
    {
        return self::find()
            ->andWhere(['STATUS' => static::STATUS_ENABLE])
            ->andWhere(['lang' => Lang::getLangId()])
            ->limit($limit)->all();
    }
}
