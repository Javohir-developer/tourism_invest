<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Post;

/**
 * PostSearch represents the model behind the search form of `common\models\Post`.
 */
class PostSearch extends Post
{
    const TOP = 1;
    const NOT_TOP = null;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'top', 'lang', 'view', 'published_on', 'status', 'created_at', 'updated_at'], 'integer'],
            [['title', 'slug', 'intro', 'content', 'image', 'lang_hash', 'category'], 'safe'],

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
    public function search($params, $status = null, $category = null)
    {

        if ($status == null){
            $query = Post::find()
                ->orderBy(['published_on' => SORT_DESC]);
        } else {
            if ($category !== null){
                $query = Post::find()
                    ->where(['status' => Post::STATUS_ENABLED])
                    ->andWhere(['LIKE', 'category', $category])
                    ->orderBy(['published_on' => SORT_DESC]);

            } else {
                $query = Post::find()
                    ->where(['status' => Post::STATUS_ENABLED])
                    ->orderBy(['published_on' => SORT_DESC]);
            }
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
            'lang' => $this->lang,
            'view' => $this->view,
            'published_on' => $this->published_on,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'top', $this->top])
            ->andFilterWhere(['like', 'intro', $this->intro])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'category', $this->category])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'lang_hash', $this->lang_hash]);

        return $dataProvider;
    }

}
