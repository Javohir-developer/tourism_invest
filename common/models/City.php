<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property int $id
 * @property int $region_id
 * @property string $name
 * @property double $lat
 * @property double $long
 * @property Region $region
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['region_id'], 'integer'],
            [['lat', 'long'], 'number'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'region_id' => 'Region ID',
            'name' => 'Name',
            'lat' => 'Lat',
            'long' => 'Long',
			'region' => "Region",
        ];
    }

	public function getRegion()
	{
		$this->hasOne(Region::className(), ['id' => 'region_id']);
    }
}
