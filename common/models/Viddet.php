<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "viddet".
 *
 * @property int $id
 * @property string $value_uz
 */
class Viddet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'viddet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['value_uz'], 'required'],
            [['value_uz', 'icons'], 'string', 'max' => 225],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'value_uz' => 'value_uz',
        ];
    }
}
