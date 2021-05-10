<?php

namespace common\models;

use common\components\InputModelBehavior;
use oks\core\behaviors\SlugBehavior;
use oks\langs\components\Lang;
use oks\langs\components\ModelBehavior;
use oks\langs\models\Langs;
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "photo_gallery".
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $image
 * @property int $sort
 * @property string $description
 * @property int $status
 * @property string $lang_hash
 * @property int $lang
 * @property int $created_at
 * @property int $updated_at
 */
class PhotoGallery extends \yii\db\ActiveRecord
{
    const STATUS_ENABLE = 1;
    const STATUS_DISABLE = 0;

    const TYPE_PORTAL = 0;
    const TYPE_CENTER = 1;

    private $_postsimagespostersdata;

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
            'slug' => [
                'class' => SlugBehavior::className(),
                'attribute' => 'slug',
                'attribute_title'=> 'name',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'photo_gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sort', 'status', 'lang', 'created_at', 'type', 'updated_at'], 'integer'],
            [['description'], 'string'],
            [['name', 'image', 'slug'], 'string', 'max' => 255],
            [['lang_hash'], 'string', 'max' => 60],
            [
                ['lang'],
                'exist',
                'skipOnError' => true,
                'targetClass' => Langs::className(),
                'targetAttribute' => ['lang' => 'lang_id']
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
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

    public function getpostsimagespostersdata(){
        return $this->_postsimagespostersdata;
    }
    public function setpostsimagespostersdata($value){
        return $this->_postsimagespostersdata = $value;
    }

    public static function getAllPhotos($limit = 5)
    {
        return self::find()
            ->andWhere(['status' => static::STATUS_ENABLE])
            ->andWhere(['lang' => Lang::getLangId()])
            ->limit($limit)->all();
    }
}
