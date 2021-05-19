<?php

namespace common\models;

use Baha2Odeh\RecaptchaV3\RecaptchaV3Validator;
use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string $first_name
 * @property string $list_name
 * @property string $subject
 * @property string $text
 */
class Contacts extends \yii\db\ActiveRecord
{
    public $code;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'list_name', 'subject', 'text'], 'required'],
            [['id'], 'integer'],
            [['subject', 'text'], 'string'],
            [['first_name', 'list_name'], 'string', 'max' => 225],
            [['code'], RecaptchaV3Validator::className(), 'acceptance_score' => null],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => Yii::t('app','Ism'),
            'list_name' => Yii::t('app','Familiya'),
            'subject' => Yii::t('app','Mavzu'),
            'text' => Yii::t('app','Matin'),
        ];
    }
}
