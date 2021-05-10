<?php

namespace common\models;

use common\components\InputModelBehavior;
use oks\core\behaviors\SlugBehavior;
use oks\filemanager\models\Files;
use oks\langs\components\Lang;
use oks\langs\components\ModelBehavior;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "slider".
 *
 * @property int $id
 * @property string $title
 * @property string $image
 * @property string $link
 * @property int $status
 * @property int $order
 * @property int $lang
 * @property int $type_to
 * @property string $lang_hash
 * @property int $created_at
 * @property int $updated_at
 */
class Slider extends \yii\db\ActiveRecord
{
    private $_sliderimagespostersdata;

    const TYPE_SLIDER = 0;
    const TYPE_BANNER = 1;
    const TYPE_BANNER_FOOTER = 2;

    const TYPE_PORTAL = 0;
    const TYPE_CENTER = 1;

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
                'attribute' => 'link',
                'attribute_title'=> 'title',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image'], 'required'],
            [['status', 'order', 'lang', 'created_at', 'type', 'updated_at', 'type_to'], 'integer'],
            [['title', 'image', 'link'], 'string', 'max' => 255],
            [['lang_hash'], 'string', 'max' => 60],
            [['description'], 'string'],
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
            'type_to' => 'Type',
            'order' => 'Order',
            'lang' => 'Lang',
            'lang_hash' => 'Lang Hash',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public static function getAllSliders($limit, $type)
    {
        return self::find()
            ->where(['status' => 1, 'type' => static::TYPE_SLIDER, 'type_to' => $type])
            ->andWhere(['lang' => Lang::getLangId()])
            ->limit($limit)
            ->all();
    }

    public static function getAllBanners($limit = 5)
    {
        return self::find()->where(['status' => 1, 'type' => static::TYPE_BANNER])->andWhere(['lang' => Lang::getLangId()])->orderBy(new \yii\db\Expression('rand()'))->limit($limit)->all();
    }


    public function getsliderimagespostersdata(){
        return $this->_sliderimagespostersdata;
    }
    public function setsliderimagespostersdata($value){
        return $this->_sliderimagespostersdata = $value;
    }
}
