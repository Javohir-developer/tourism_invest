<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "mistakes".
 *
 * @property int $id
 * @property string $route
 * @property string $mistake
 * @property string $comment
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Mistakes extends \yii\db\ActiveRecord
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
        return 'mistakes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['route', 'mistake', 'comment'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'route' => 'Route',
            'mistake' => 'Mistake',
            'comment' => 'Comment',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
