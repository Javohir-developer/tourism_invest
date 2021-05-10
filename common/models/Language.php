<?php

namespace common\models;

use oks\langs\models\Langs;
use Yii;
use yii\caching\TagDependency;
use yii\data\ActiveDataProvider;

class Language extends BaseModel
{
	const CACHE_TAG = 'langs';

	const STATUS_DISABLE = 0;
	const STATUS_ENABLE  = 1;

	public static function tableName()
    {
        return 'langs';
    }

	public function rules()
	{
		return [
			[['name', 'code'], 'required'],
			[['name', 'code'], 'unique'],
			['code', 'string', 'max' => 5],
			[['status'], 'in', 'range' => array_keys(self::getStatusArray())],
		];
	}

    public function attributeLabels()
    {
        return [
            'lang_id'     => __('ID'),
            'name'  => __('Nema'),
            'code'   => __('Code'),
            'status' => __('Status'),
        ];
    }

	public static function getStatusArray()
	{
		return [
			self::STATUS_DISABLE => 'Disable',
			self::STATUS_ENABLE  => 'Enable',
		];
	}

	public function getStatus()
	{
		$arr = self::getStatusArray();
		return isset($arr[$this->status]) ? $arr[$this->status] : $this->status;
	}

	public static function getCurrentLang()
	{
		$lang = Yii::$app->request->get('lang');

		$language = Language::get($lang);

		return !is_object($language) ?: $language;

	}

	public static function getCurrentLangId()
	{
		$lang = Yii::$app->language;

		$language = Language::get($lang);

		return !is_object($language) ?: $language->id;

	}

	public static function get($lang)
	{
		$lang = $lang ?: Yii::$app->language;

		$result = Yii::$app->cache->getOrSet([self::CACHE_TAG, 'lang' => $lang], function () use ($lang)
		{
			if (!$language = self::findOne(['slug' => $lang]))
			{
				return null;
			}

			return $language;

		}, 3600, new TagDependency(['tags' => self::CACHE_TAG]));

		return $result;
	}

	public static function getAll()
	{
		$result = Yii::$app->cache->getOrSet([self::CACHE_TAG], function ()
		{
			if (!$language = self::find()->all())
			{
				return null;
			}

			return $language;

		}, 3600, new TagDependency(['tags' => self::CACHE_TAG]));

		return $result;
	}

	public static function getLangByArray()
	{
		$result = Yii::$app->cache->getOrSet([self::CACHE_TAG . 'Array2'], function ()
		{
			$data = [];
            foreach (Langs::find()->asArray()->all() as $item) {
                $data[$item['lang_id']] = $item['code'];
			}

			return $data;

		}, 3600, new TagDependency(['tags' => self::CACHE_TAG]));

		return $result;
	}

	public function search($params)
	{
		$query = self::find();

		$provider = new ActiveDataProvider([
			'query'      => $query,
			'sort'       => [
				'defaultOrder' => [
					'position' => SORT_ASC,
				],
			],
			'pagination' => [
				'pageSize' => 20,
			],
		]);

		if (!($this->load($params) && $this->validate()))
		{
			return $provider;
		}

		if ($this->search)
		{
			$query->orFilterWhere(['like', 'title', $this->search]);
		}

		return $provider;
	}

	public function afterSave($insert, $changedAttributes)
	{
		$this->invalidateTranslation();
		parent::afterSave($insert, $changedAttributes);
	}

	public function afterDelete()
	{
		$this->invalidateTranslation();
		parent::afterDelete();
	}

	public function invalidateTranslation()
	{
		TagDependency::invalidate(Yii::$app->cache, [self::CACHE_TAG]);
	}
}
