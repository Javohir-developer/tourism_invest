<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Invest;

/**
 * InvestSearch represents the model behind the search form of `common\models\Invest`.
 */
class InvestSearch extends Invest
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'city_id', 'region_id', 'uz_inn', 'information_project_sum', 'information_project_dollar', 'standart', 'improvements', 'semi_suite', 'suite', 'apartment', 'number_of_beds', 'number_of_rooms', 'finance_self_sum', 'finance_consumed_sum', 'finance_credit_sum', 'finance_credit_dollar', 'finance_frr_dollar', 'finance_foreign_line_dollar', 'finance_investment_dollar', 'kind_activity', 'status'], 'integer'],
            [['project_name', 'address', 'initiator', 'latitude', 'longitude', 'uz_company_name', 'uz_fio', 'uz_address', 'uz_tel', 'uz_email', 'foreigner_company_name', 'foreigner_fio', 'foreigner_address', 'foreigner_tel', 'foreigner_email', 'foreigner_country', 'information_dollar_course', 'information_proof', 'finance_start_date', 'finance_end_date', 'short_description', 'problems', 'solving_problems', 'created_jobs', 'square', 'allocation', 'service_bank', 'add_new2', 'add_new3', 'information_project_sum1', 'information_project_dollar1', 'information_dollar_course1', 'finance_credit_sum1', 'finance_credit_dollar1', 'finance_self_sum1', 'finance_frr_dollar1', 'finance_foreign_line_dollar1', 'finance_investment_dollar1', 'finance_start_date1', 'finance_end_date1', 'status_proyikt', 'create_data', 'image', 'image1', 'image2', 'link'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Invest::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'city_id' => $this->city_id,
            'region_id' => $this->region_id,
            'uz_inn' => $this->uz_inn,
            'information_project_sum' => $this->information_project_sum,
            'information_project_dollar' => $this->information_project_dollar,
            'standart' => $this->standart,
            'improvements' => $this->improvements,
            'semi_suite' => $this->semi_suite,
            'suite' => $this->suite,
            'apartment' => $this->apartment,
            'number_of_beds' => $this->number_of_beds,
            'number_of_rooms' => $this->number_of_rooms,
            'finance_self_sum' => $this->finance_self_sum,
            'finance_consumed_sum' => $this->finance_consumed_sum,
            'finance_credit_sum' => $this->finance_credit_sum,
            'finance_credit_dollar' => $this->finance_credit_dollar,
            'finance_frr_dollar' => $this->finance_frr_dollar,
            'finance_foreign_line_dollar' => $this->finance_foreign_line_dollar,
            'finance_investment_dollar' => $this->finance_investment_dollar,
            'finance_start_date' => $this->finance_start_date,
            'finance_end_date' => $this->finance_end_date,
            'kind_activity' => $this->kind_activity,
            'finance_start_date1' => $this->finance_start_date1,
            'finance_end_date1' => $this->finance_end_date1,
            'create_data' => $this->create_data,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'project_name', $this->project_name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'initiator', $this->initiator])
            ->andFilterWhere(['like', 'latitude', $this->latitude])
            ->andFilterWhere(['like', 'longitude', $this->longitude])
            ->andFilterWhere(['like', 'uz_company_name', $this->uz_company_name])
            ->andFilterWhere(['like', 'uz_fio', $this->uz_fio])
            ->andFilterWhere(['like', 'uz_address', $this->uz_address])
            ->andFilterWhere(['like', 'uz_tel', $this->uz_tel])
            ->andFilterWhere(['like', 'uz_email', $this->uz_email])
            ->andFilterWhere(['like', 'foreigner_company_name', $this->foreigner_company_name])
            ->andFilterWhere(['like', 'foreigner_fio', $this->foreigner_fio])
            ->andFilterWhere(['like', 'foreigner_address', $this->foreigner_address])
            ->andFilterWhere(['like', 'foreigner_tel', $this->foreigner_tel])
            ->andFilterWhere(['like', 'foreigner_email', $this->foreigner_email])
            ->andFilterWhere(['like', 'foreigner_country', $this->foreigner_country])
            ->andFilterWhere(['like', 'information_dollar_course', $this->information_dollar_course])
            ->andFilterWhere(['like', 'information_proof', $this->information_proof])
            ->andFilterWhere(['like', 'short_description', $this->short_description])
            ->andFilterWhere(['like', 'problems', $this->problems])
            ->andFilterWhere(['like', 'solving_problems', $this->solving_problems])
            ->andFilterWhere(['like', 'created_jobs', $this->created_jobs])
            ->andFilterWhere(['like', 'square', $this->square])
            ->andFilterWhere(['like', 'allocation', $this->allocation])
            ->andFilterWhere(['like', 'service_bank', $this->service_bank])
            ->andFilterWhere(['like', 'add_new2', $this->add_new2])
            ->andFilterWhere(['like', 'add_new3', $this->add_new3])
            ->andFilterWhere(['like', 'information_project_sum1', $this->information_project_sum1])
            ->andFilterWhere(['like', 'information_project_dollar1', $this->information_project_dollar1])
            ->andFilterWhere(['like', 'information_dollar_course1', $this->information_dollar_course1])
            ->andFilterWhere(['like', 'finance_credit_sum1', $this->finance_credit_sum1])
            ->andFilterWhere(['like', 'finance_credit_dollar1', $this->finance_credit_dollar1])
            ->andFilterWhere(['like', 'finance_self_sum1', $this->finance_self_sum1])
            ->andFilterWhere(['like', 'finance_frr_dollar1', $this->finance_frr_dollar1])
            ->andFilterWhere(['like', 'finance_foreign_line_dollar1', $this->finance_foreign_line_dollar1])
            ->andFilterWhere(['like', 'finance_investment_dollar1', $this->finance_investment_dollar1])
            ->andFilterWhere(['like', 'status_proyikt', $this->status_proyikt])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'image1', $this->image1])
            ->andFilterWhere(['like', 'image2', $this->image2])
            ->andFilterWhere(['like', 'link', $this->link]);

        return $dataProvider;
    }
}
