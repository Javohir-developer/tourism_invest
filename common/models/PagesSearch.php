<?php

namespace common\models;

use oks\categories\models\Categories;
use oks\langs\components\Lang;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Pages;

/**
 * PagesSearch represents the model behind the search form of `common\models\Pages`.
 */
class PagesSearch extends Pages
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'lang', 'view', 'status', 'created_at', 'updated_at'], 'integer'],
            [['title', 'body', 'slug', 'copyright', 'lang_hash', 'files'], 'safe'],
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
    public function search($params, $category = null)
    {
        if ($category !== null){
            $category_id = Categories::find()->where(['slug' => $category, 'lang' => Lang::getLangId()])->asArray()->one();

            $query = Pages::find()->where(['like', 'category_id', $category_id['id']]);
        } else {
            $query = Pages::find();
        }

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
            'view' => $this->view,
            'status' => $this->status,
            'lang' => $this->lang,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'body', $this->body])
            ->andFilterWhere(['like', 'files', $this->files])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'lang_hash', $this->lang_hash])
            ->andFilterWhere(['like', 'copyright', $this->copyright]);

        return $dataProvider;
    }
}
