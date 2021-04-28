<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Region;

/**
 * RegionSearch represents the model behind the search form of `common\models\Region`.
 */
class RegionSearch extends Region
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'c_order', 'ns10_code'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'name_cyrl', 'hc_key'], 'safe'],
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
        $query = Region::find();

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
            'c_order' => $this->c_order,
            'ns10_code' => $this->ns10_code,
        ]);

        $query->andFilterWhere(['like', 'name_uz', $this->name_uz])
            ->andFilterWhere(['like', 'name_ru', $this->name_ru])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'name_cyrl', $this->name_cyrl])
            ->andFilterWhere(['like', 'hc_key', $this->hc_key]);

        return $dataProvider;
    }
}
