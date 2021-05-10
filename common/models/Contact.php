<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $type
 * @property string $full_name
 * @property string $phone
 * @property string $email
 * @property string $message
 * @property string $status
 * @property int $created_at
 * @property int $updated_at
 */
class Contact extends \yii\db\ActiveRecord
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
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'full_name', 'phone', 'message'], 'required'],
			[['created_at', 'updated_at'], 'integer'],
            [['message'], 'string'],
            [['type', 'full_name', 'email', 'status'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('main', 'ID'),
            'type' => Yii::t('main', 'Type'),
            'full_name' => Yii::t('main', 'Full Name'),
            'phone' => Yii::t('main', 'Phone'),
            'email' => Yii::t('main', 'Email'),
            'message' => Yii::t('main', 'Message'),
			'status' => 'Status',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
        ];
    }
}
