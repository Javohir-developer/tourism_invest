<?php

namespace console\controllers;

use common\models\Weather;
use yii\console\Controller;
use yii\helpers\ArrayHelper;
use yii\httpclient\Client;
use common\modules\currency\models\Currency;

/**
 * Class CronController
 *
 * @package console\controllers
 * @var $model Weather
 */
class CronController extends Controller
{
	/**
	 * @throws \yii\httpclient\Exception
	 */
	public function actionCurrency()
	{
        $client = new Client();
        $data = $client->get("http://cbu.uz/ru/arkhiv-kursov-valyut/json/")->send();
        $currency_data = $data->getData();

		foreach(Currency::$currencies as $currency){

			$current_currency = ArrayHelper::index($currency_data, 'Ccy')[$currency];

			if(Currency::findOne(['name' => $current_currency['Ccy'], 'date' => strtotime($current_currency['Date'])]) !== null){
				print_r('NO CHANGES' . PHP_EOL);
				continue;
			}

			$currency = new Currency();
			$currency->name = $current_currency["Ccy"];
			$currency->value = $current_currency["Rate"];
			$currency->date = strtotime($current_currency["Date"]);
			$currency->diff = $current_currency["Diff"];
			$currency->save();

			if(count($currency->getErrors())){
				print_r($currency->getErrors());
			} else {
				print_r($currency->name . ' --- SAVED' . PHP_EOL);
			}
		}
	}

	public function actionWeather()
    {
        $client = new Client();
        $data = $client->get("https://api.weather.yandex.ru/v1/informers?lat=41&lon=69&[lang='ru-RU']")->addHeaders([
            'X-Yandex-API-Key' => '1d5d02c6-b861-4517-809b-1b1854a92b2d'
        ])->send();
        $weather = $data->getData();
        if (!empty($weather))
        {
            $model = new Weather();
            $model->weather = $weather['fact']['temp'];
            $model->time = $weather['now'];
            $model->icon = $weather['fact']['icon'];
            $model->save();

            if(count($model->getErrors())){
                print_r($model->getErrors());
            } else {
                print_r( 'WEATHER --- SAVED' . PHP_EOL);
            }
        }
    }
}
