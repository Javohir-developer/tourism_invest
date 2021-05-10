<?php

namespace common\modules\currency\models;

use Yii;
use yii\caching\ChainedDependency;
use yii\caching\DbDependency;

/**
 * This is the model class for table "currency".
 *
 * @property int $id
 * @property int $code
 * @property string $currency
 * @property string $currency_name
 * @property double $value
 * @property int $date
 */
class Currency extends \yii\db\ActiveRecord
{
	/**
	 * @var array
	 */
	public static $currencies = [
		'USD',
		'EUR',
		'RUB',
        'GBP',
        'JPY',
        'AED',
	];

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'currency';
    }

	/**
	 * @var string
	 */
	public static $cacheDbDependencyUpdate = "SELECT MAX(date) FROM {{%currency}}";

	/**
	 * @var string
	 */
	public static $cacheDbDependencyCount = "SELECT COUNT(*) FROM {{%currency}}";

	/**
	 * @var int
	 */
	public static $cacheDuration = 31536000;

	/**
	 * @return \yii\caching\ChainedDependency
	 */
	public static function dbDependencyChained()
	{
		return new ChainedDependency([
			'dependencies' => [
				new DbDependency(['sql' => static::$cacheDbDependencyUpdate]),
				new DbDependency(['sql' => static::$cacheDbDependencyCount]),
			],
		]);
	}

	/**
	 * @return array
	 */
	public static function dbDependencyUpdate()
	{
		return [
			'class' => 'yii\caching\DbDependency',
			'sql' => static::$cacheDbDependencyUpdate
		];
	}

	/**
	 * @return array
	 */
	public static function dbDependencyCount()
	{
		return [
			'class' => 'yii\caching\DbDependency',
			'sql' => static::$cacheDbDependencyCount
		];
	}

	/**
	 * @return array
	 */
	public static function cacheFragmentParams()
	{
		return [
			'variations' => [Yii::$app->language, Yii::$app->layout],
			'duration'   => static::$cacheDuration,
			'dependency' => static::dbDependencyChained()
		];
	}

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'integer'],
            [['value', 'diff'], 'number'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
			'id'    => Yii::t( 'system', 'ID' ),
			'name'  => Yii::t( 'system', 'Name' ),
			'diff'  => Yii::t( 'system', 'Difference' ),
			'value' => Yii::t( 'system', 'Value' ),
			'date'  => Yii::t( 'system', 'Date' ),
        ];
    }

	/**
	 * @return array|\common\modules\currency\models\Currency[]
	 */
	public static function getLastValues()
	{
		return self::find()
			->where(['IN', 'name', self::$currencies])
			->limit(count(self::$currencies))
			->orderBy(['date' => SORT_DESC])
			->asArray()
			->all();
	}

    /**
     * {@inheritdoc}
     * @return CurrencyQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CurrencyQuery(get_called_class());
    }
}
