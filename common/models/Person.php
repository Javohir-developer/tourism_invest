<?php

namespace common\models;

use oks\langs\components\Lang;
use Yii;
use yii\behaviors\TimestampBehavior;
use oks\langs\components\ModelBehavior;
use common\components\InputModelBehavior;

/**
 * This is the model class for table "person".
 *
 * @property int $id
 * @property string $fullName
 * @property string $phone
 * @property string $fax
 * @property string $email
 * @property string $image
 * @property string $bio
 * @property string $duties
 * @property string $reception
 * @property string $link_blog
 * @property string $link_forum
 * @property int $region_id
 * @property int $sort
 * @property int $type
 * @property string $position
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property int $lang
 * @property int $type_to
 * @property string $lang_hash
 *
 * @property Group[] $groups
 * @property Region[] $regions
 */
class Person extends \yii\db\ActiveRecord
{
    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;
    const TYPE_RECEPTION = 3;
    const TYPE_HEAD = 2;
    const TYPE_TEACHER = 1;

    private $_personsimagespostersdata;

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
        return 'person';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bio', 'position', 'duties', 'image'], 'string'],
            [['region_id', 'sort', 'status', 'created_at', 'updated_at', 'lang', 'type', 'type_to'], 'integer'],
            [['fullName', 'email', 'reception', 'link_blog', 'link_forum', 'lang_hash'], 'string', 'max' => 255],
            [['phone', 'fax'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullName' => 'Full Name',
            'phone' => 'Phone',
            'fax' => 'Fax',
            'email' => 'Email',
			'image' => 'Image',
            'bio' => 'Bio',
            'duties' => 'Duties',
            'reception' => 'Reception',
            'link_blog' => 'Link Blog',
            'link_forum' => 'Link Forum',
            'region_id' => 'Region ID',
            'sort' => 'Sort',
            'type' => 'Type',
            'type_to' => 'Type',
            'position' => 'Position',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'lang' => 'Lang',
            'lang_hash' => 'Lang Hash',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroups()
    {
        return $this->hasMany(Group::className(), ['person_id' => 'id']);
    }

	public function getRegions()
	{
		return $this->hasOne(Region::className(), ['id', 'region_id']);
    }

    public function getpersonsimagespostersdata(){
        return $this->_personsimagespostersdata;
    }
    public function setpersonsimagespostersdata($value){
        return $this->_personsimagespostersdata = $value;
    }

    public static function getReceptions($limit)
    {
        return self::find()->where(['status' => 1, 'lang' => Lang::getLangId(), 'type' => self::TYPE_RECEPTION])->limit($limit)->all();
    }
}
