<?php

namespace common\models;

use oks\langs\components\Lang;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\RegionCourses;

/**
 * RegionCoursesSearch represents the model behind the search form of `common\models\RegionCourses`.
 */
class RegionCoursesSearch extends RegionCourses
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'lang'], 'integer'],
            [['title', 'description', 'link', 'image', 'slug', 'lang_hash'], 'safe'],
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
        $query = RegionCourses::find()->where(['lang' => Lang::getLangId()]);

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
            'lang' => $this->lang,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'lang_hash', $this->lang_hash]);

        return $dataProvider;
    }
}
