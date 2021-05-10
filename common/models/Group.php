<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "group".
 *
 * @property int $id
 * @property string $category
 * @property string $persons
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Person $person
 */
class Group extends \yii\db\ActiveRecord
{
	public function behaviors()
	{
		return [
		  TimestampBehavior::className(),
		];
	}

	/**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category'], 'required'],
            [['person_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['category'], 'string', 'max' => 255],
			[['persons'], 'safe'],
            [['person_id'], 'exist', 'skipOnError' => true, 'targetClass' => Person::className(), 'targetAttribute' => ['person_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'person_id' => 'Person ID',
			'persons' => 'Persons',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerson()
    {
        return $this->hasOne(Person::className(), ['id' => 'person_id']);
    }
}
