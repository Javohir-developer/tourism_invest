<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property int $id
 * @property int|null $region_id
 * @property string|null $name_uz
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property string|null $name_cyrl
 * @property int|null $phone_kod
 * @property int|null $c_order
 * @property int|null $ns11_code
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
            [['region_id', 'phone_kod', 'c_order', 'ns11_code'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'name_cyrl'], 'string', 'max' => 50],
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
            'name_uz' => 'Name Uz',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'name_cyrl' => 'Name Cyrl',
            'phone_kod' => 'Phone Kod',
            'c_order' => 'C Order',
            'ns11_code' => 'Ns11 Code',
        ];
    }
}
