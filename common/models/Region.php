<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "region".
 *
 * @property int $id
 * @property string|null $name_uz
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property string|null $name_cyrl
 * @property string|null $hc_key
 * @property int|null $c_order
 * @property int|null $ns10_code
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
            [['c_order', 'ns10_code'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'name_cyrl'], 'string', 'max' => 50],
            [['hc_key'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_uz' => 'Name Uz',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'name_cyrl' => 'Name Cyrl',
            'hc_key' => 'Hc Key',
            'c_order' => 'C Order',
            'ns10_code' => 'Ns10 Code',
        ];
    }
}
