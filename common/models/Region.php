<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "region".
 *
 * @property int $id
 * @property int $country_id
 * @property string $name
 * @property double $lat
 * @property double $lon
 */
class Region extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'region';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country_id'], 'integer'],
            [['name'], 'required'],
            [['lat', 'lon'], 'number'],
            [['name'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country_id' => 'Country ID',
            'name' => 'Name',
            'lat' => 'Lat',
            'lon' => 'Lon',
        ];
    }
}
