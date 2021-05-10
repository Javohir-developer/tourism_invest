<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Person;

/**
 * PersonSearch represents the model behind the search form of `common\models\Person`.
 */
class PersonSearch extends Person
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'region_id', 'sort', 'position', 'status', 'created_at', 'updated_at', 'lang'], 'integer'],
            [['fullName', 'image', 'phone', 'fax', 'email', 'bio', 'duties', 'reception', 'link_blog', 'link_forum', 'lang_hash'], 'safe'],
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
        $query = Person::find()
        ->orderBy(['sort' => SORT_ASC]);

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
            'region_id' => $this->region_id,
            'sort' => $this->sort,
            'position' => $this->position,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'lang' => $this->lang,
        ]);

        $query->andFilterWhere(['like', 'fullName', $this->fullName])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'bio', $this->bio])
            ->andFilterWhere(['like', 'duties', $this->duties])
            ->andFilterWhere(['like', 'reception', $this->reception])
            ->andFilterWhere(['like', 'link_blog', $this->link_blog])
            ->andFilterWhere(['like', 'link_forum', $this->link_forum])
            ->andFilterWhere(['like', 'lang_hash', $this->lang_hash]);

        return $dataProvider;
    }
}
