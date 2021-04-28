<?php

namespace common\models;

use Yii;
use yii\db\Query;
use yii\helpers\ArrayHelper;
use yii\httpclient\Client;

/**
 * This is the model class for table "invest".
 *
 * @property int $id
 * @property int $user_id
 * @property int $city_id
 * @property int $region_id
 * @property string $project_name
 * @property string $address
 * @property string $initiator
 * @property string $latitude
 * @property string $longitude
 * @property string $uz_company_name
 * @property string $uz_fio
 * @property string $uz_address
 * @property string $uz_tel
 * @property string $uz_email
 * @property int $uz_inn
 * @property string $foreigner_company_name
 * @property string $foreigner_fio
 * @property string $foreigner_address
 * @property string $foreigner_tel
 * @property string $foreigner_email
 * @property string $foreigner_country
 * @property int $information_project_sum
 * @property int $information_project_dollar
 * @property string $information_dollar_course
 * @property int $standart
 * @property int $improvements
 * @property int $semi_suite
 * @property int $suite
 * @property int $apartment
 * @property int $number_of_beds
 * @property int $number_of_rooms
 * @property string $information_proof
 * @property int $finance_self_sum
 * @property int $finance_consumed_sum
 * @property int $finance_credit_sum
 * @property int $finance_credit_dollar
 * @property int $finance_frr_dollar
 * @property int $finance_foreign_line_dollar
 * @property int $finance_investment_dollar
 * @property string $finance_start_date
 * @property string $finance_end_date
 * @property string $short_description
 * @property string $problems
 * @property string $solving_problems
 * @property int $kind_activity
 * @property string $created_jobs
 * @property string $square
 * @property string $allocation
 * @property string $service_bank
 * @property string $add_new2
 * @property string $add_new3
 * @property string $information_project_sum1
 * @property string $information_project_dollar1
 * @property string $information_dollar_course1
 * @property string $finance_credit_sum1
 * @property string $finance_credit_dollar1
 * @property string $finance_self_sum1
 * @property string $finance_frr_dollar1
 * @property string $finance_foreign_line_dollar1
 * @property string $finance_investment_dollar1
 * @property string $finance_start_date1
 * @property string $finance_end_date1
 * @property string $status_proyikt
 * @property string $create_data
 * @property string|null $image
 * @property string|null $image1
 * @property string|null $image2
 * @property string $link
 * @property int $status
 */

class Invest extends \yii\db\ActiveRecord
{

    public $imageFiles;
    public $imageFiles1;
    public $imageFiles2;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'invest';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'city_id', 'region_id', 'project_name', 'address', 'initiator', 'latitude', 'longitude', 'uz_company_name', 'uz_fio', 'uz_address', 'uz_tel', 'uz_email', 'uz_inn', 'foreigner_company_name', 'foreigner_fio', 'foreigner_address', 'foreigner_tel', 'foreigner_email', 'foreigner_country', 'information_project_sum', 'information_project_dollar', 'information_dollar_course', 'standart', 'improvements', 'semi_suite', 'suite', 'apartment', 'number_of_beds', 'number_of_rooms', 'information_proof', 'finance_self_sum', 'finance_consumed_sum', 'finance_credit_sum', 'finance_credit_dollar', 'finance_frr_dollar', 'finance_foreign_line_dollar', 'finance_investment_dollar', 'finance_start_date', 'finance_end_date', 'short_description', 'problems', 'solving_problems', 'kind_activity', 'created_jobs', 'square', 'allocation', 'service_bank', 'add_new2', 'add_new3', 'information_project_sum1', 'information_project_dollar1', 'information_dollar_course1', 'finance_credit_sum1', 'finance_credit_dollar1', 'finance_self_sum1', 'finance_frr_dollar1', 'finance_foreign_line_dollar1', 'finance_investment_dollar1', 'finance_start_date1', 'finance_end_date1', 'status_proyikt', 'create_data', 'link'], 'required'],
            [['user_id', 'city_id', 'region_id', 'uz_inn', 'information_project_sum', 'information_project_dollar', 'standart', 'improvements', 'semi_suite', 'suite', 'apartment', 'number_of_beds', 'number_of_rooms', 'finance_self_sum', 'finance_consumed_sum', 'finance_credit_sum', 'finance_credit_dollar', 'finance_frr_dollar', 'finance_foreign_line_dollar', 'finance_investment_dollar', 'kind_activity', 'status'], 'integer'],
            [['finance_start_date', 'finance_end_date', 'finance_start_date1', 'finance_end_date1', 'create_data'], 'safe'],
            [['short_description', 'problems', 'solving_problems'], 'string'],
            [['project_name', 'address', 'initiator', 'latitude', 'longitude', 'uz_company_name', 'uz_fio', 'uz_address', 'uz_tel', 'uz_email', 'foreigner_company_name', 'foreigner_fio', 'foreigner_address', 'foreigner_tel', 'foreigner_email', 'foreigner_country', 'information_dollar_course', 'information_proof'], 'string', 'max' => 255],
            [['created_jobs', 'square', 'allocation', 'service_bank', 'add_new2', 'add_new3', 'information_project_sum1', 'information_project_dollar1', 'information_dollar_course1', 'finance_credit_sum1', 'finance_credit_dollar1', 'finance_self_sum1', 'finance_frr_dollar1', 'finance_foreign_line_dollar1', 'finance_investment_dollar1', 'status_proyikt', 'image', 'image1', 'image2', 'link'], 'string', 'max' => 225],
            ['create_data', 'date', 'format' => 'yyyy-M-d'],
            ['finance_start_date', 'date', 'format' => 'yyyy-M-d'],
            ['finance_end_date', 'date', 'format' => 'yyyy-M-d'],
            ['finance_start_date1', 'date', 'format' => 'yyyy-M-d'],
            ['finance_end_date1',  'date', 'format' => 'yyyy-M-d'],
            [['imageFiles'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            [['imageFiles1'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            [['imageFiles2'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status_proyikt' => 'Статус проекта',
            'user_id' => 'User ID',
            'city_id' => 'Район/Город',
            'created_jobs' => 'Создаваемые рабочие места',
            'region_id' => 'Регион',
            'project_name' => 'Наименование проекта',
            'address' => 'Адрес',
            'initiator' => 'Инициатор',
            'latitude' => 'Широта',
            'longitude' => 'Долгота',
            'uz_company_name' => 'Партнер с узбекской стороны (Наименование Компании)',
            'uz_fio' => 'ФИО',
            'uz_address' => 'Адрес',
            'uz_tel' => 'Телефон',
            'uz_email' => 'Е-маил',
            'uz_inn' => 'ИНН',
            'foreigner_company_name' => 'Партнер с иностранный стороны (Наименование Компании)',
            'foreigner_fio' => 'ФИО',
            'foreigner_address' => 'Адрес',
            'foreigner_tel' => 'Телефон',
            'foreigner_email' => 'Е-маил',
            'foreigner_country' => 'Страна',
            'information_project_sum' => 'Сумма проектов (тыс.долл.США) ',
            'information_project_dollar' => 'Сумма проектов(тыс. долл. США)',
            'information_dollar_course' => 'Текущий курс доллара',
            'standart' => 'Стандарт',
            'improvements' => 'Улучшения',
            'semi_suite' => 'Полу люкс',
            'suite' => 'Люкс',
            'apartment' => 'Апартамент',
            'number_of_beds' => 'Количество коек мест',
            'number_of_rooms' => 'Общее количество номеров',
            'information_proof' => 'Основание (ПП, ПКМ и т.д.) номер и дата',
            'kind_activity' => 'Вид деятельности',
            'service_bank' => 'Обслуживающий банк',
            'information_prognoz_dollar' => 'Прогноз экспорта услуг в тыс. долл. США',
            'information_area' => 'Площадь',
            'information_area_proof' => 'Осноавние (№ и дата)',
            'finance_self_sum' => 'Ист. фин.  Собственние средства(млн. сум)',
            'finance_credit_sum' => 'Ист. фин. Банковские кредиты(млн. сум)',
            'finance_credit_dollar' => 'Ист. фин.  Банковские кредиты(тыс. долл. США)',
            'finance_frr_dollar' => 'Ист. фин.  ФРР (тыс.  долл. США)',
            'finance_foreign_line_dollar' => 'Ист. фин.  Иностранные кредитние линии(тыс. долл. США)',
            'finance_investment_dollar' => 'Ист. фин.  Иностранные инвестиции (тыс . долл. США) ',
            'finance_consumed_sum' => 'Сумма освоения на дату отчета млн. сумм.',
            'finance_job_places' => 'Создаваемые рабочие места',
            'finance_start_date' => 'Дата начали(по плану)',
            'finance_start_date1' => 'Дата начали(по факту)',
            'finance_end_date' => 'Сроки проекта Дата окончании(по плану)',
            'finance_end_date1' => 'Сроки проекта Дата окончании(по факту)',
            'short_description' => 'Краткое описание о выполнение работ ',
            'problems' => 'Существуюшие проблемы',
            'solving_problems' => 'Предложение по решению проблем',
            'information_project_sum1' => 'Сумма освоения на дату отчёта(млн. Сум)',
            'information_project_dollar1' => 'Сумма освоения на дату отчёта(тыс. долл. США)',
            'finance_credit_sum1' => 'Из них Банковские кредиты(млн. сум)',
            'finance_credit_dollar1' => 'Из них Банковские кредиты(тыс. долл. США)',
            'finance_self_sum1' => 'Из них Собственние средства, млн. сум',
            'finance_frr_dollar1' => 'Из них ФРР (тыс. долл. США)',
            'finance_foreign_line_dollar1' => 'Из них Иностранные кредитние линии(тыс. долл. США)',
            'finance_investment_dollar1' => 'Из них Иностранные инвестиции (тыс . долл. США)',
            'imageFiles' => 'Паспорт проекта(jpeg, jpg, png)',
            'imageFiles1' => 'Cетевой график проекта(jpeg, jpg, png)',
            'imageFiles2' => 'Tекущее состаяние проекта(jpeg, jpg, png)',

        ];
    }


    public function is9NumbersOnly($attribute)
    {
        if (!preg_match('/^[0-9.]{9}$/', $this->$attribute)) {
            $this->addError($attribute, 'ИНН должен быть 9 цифр');
        }
    }
    public function getPicture()
    {
        return $this->hasMany(Picture::className(), ['resources_id' => 'id']);
    }

    public function getRegion()
    {
        return $this->hasOne(Region::className(), ['id' => 'region_id']);
    }

    public function getKurs()
    {
        $client_usd = new Client(['baseUrl' => 'https://cbu.uz/oz/arkhiv-kursov-valyut/json/USD/']);
        $response_usd = $client_usd->createRequest()
            ->setFormat(Client::FORMAT_JSON)->send();
        $usd = $response_usd->getData();
        $Rate_usd = $usd['0']['Rate'];
        return $Rate_usd;
    }

    public function getCity()
    {
        return $this->hasOne(City::className(), ['id' => 'city_id']);
    }

    public function getVid()
    {
        return $this->hasOne(Viddet::className(), ['id' => 'kind_activity']);
    }

    public static function filterCity($region_id = null)
    {
        if ($region_id) {
            return ArrayHelper::map(City::find()->where(['region_id' => $region_id])->asArray()->all(), 'id', 'name_ru');
        } else {
            return [];
        }

    }

    public function getCounts(){
        $client_usd = new Client(['baseUrl' => 'https://cbu.uz/oz/arkhiv-kursov-valyut/json/USD/']);
        $response_usd = $client_usd->createRequest()
            ->setFormat(Client::FORMAT_JSON)->send();
        $usd = $response_usd->getData();
        $Rate_usd = !empty((int)$usd['0']['Rate']) ? (int)$usd['0']['Rate'] : 1;
        if (isset($Rate_usd1)){$Rate_usd = $Rate_usd1;}
        $count = Invest::find()->count();
        $finance_credit_sum = Invest::find()->select('finance_credit_sum')->sum('finance_credit_sum');
        $finance_self_sum = Invest::find()->select('finance_self_sum')->sum('finance_self_sum');
        $finance_credit_sum_doller = (((int)$finance_credit_sum * 1000000) / (int)$Rate_usd);
        $finance_self_sum_doller = (((int)$finance_self_sum * 1000000) / (int)$Rate_usd);
        $finance_investment_dollar = Invest::find()->select('finance_investment_dollar')->sum('finance_investment_dollar');
        $finance_credit_dollar = Invest::find()->select('finance_credit_dollar')->sum('finance_credit_dollar');
        $finance_foreign_line_dollar = Invest::find()->select('finance_foreign_line_dollar')->sum('finance_foreign_line_dollar');
        $jobs = Invest::find()->select('created_jobs')->sum('created_jobs');
        $finance_frr_dollar = Invest::find()->select('finance_frr_dollar')->sum('finance_frr_dollar');

        $bankski_kridet = ((int)$finance_credit_sum_doller + (int)$finance_credit_dollar * 1000 +  (int)$finance_foreign_line_dollar * 1000 + (int)$finance_frr_dollar * 1000) / 1000000;
        $inostrane_invest = ((int)$finance_investment_dollar * 1000 ) / 1000000;


        $umumiy_doller = (((int)$finance_self_sum_doller / 1000000 ) + $bankski_kridet + $inostrane_invest);
        return [
            'count'=>$count,
            'umumiy_doller'=>$umumiy_doller,
            'finance_self_sum_doller'=>$finance_self_sum_doller / 1000000,
            'bankski_kridet'=>$bankski_kridet,
            'inostrane_invest'=>$inostrane_invest,
            'jobs'=>(int)$jobs / 1000,
        ];
    }




}
