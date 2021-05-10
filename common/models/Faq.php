<?php

namespace common\models;

use Yii;
use oks\langs\models\Langs;
use yii\behaviors\TimestampBehavior;
use oks\langs\components\ModelBehavior;

/**
 * This is the model class for table "faq".
 *
 * @property int $id
 * @property int $user_id
 * @property string $question
 * @property string $answer
 * @property int $lang
 * @property string $lang_hash
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 *
 * @property User $user
 */
class Faq extends \yii\db\ActiveRecord
{
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
		];
	}

	/**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'faq';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['question'], 'required'],
            [['question', 'answer'], 'string'],
            [['user_id', 'lang', 'status', 'created_at', 'updated_at'], 'integer'],
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
			'user_id' => 'User ID',
            'question' => 'Question',
            'answer' => 'Answer',
            'lang' => 'Lang',
            'lang_hash' => 'Lang Hash',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

	public function getLang()
	{
		return $this->hasOne(Langs::className(), ['id' => 'lang']);
	}

	public function getUser()
	{
		return $this->hasOne(User::className(), ['id' => 'user_id']);
	}
}
