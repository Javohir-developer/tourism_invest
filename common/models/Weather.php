<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "weather".
 *
 * @property int $id
 * @property string $weather
 * @property int $time
 * @property string $icon
 */
class Weather extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'weather';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['weather', 'time'], 'integer'],
            [['icon'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'weather' => 'Weather',
            'time' => 'Time',
            'icon' => 'Icon',
        ];
    }
}
