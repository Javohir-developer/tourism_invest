<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
/**
 * This is the ActiveQuery class for [[Posts]].
 *
 * @see Posts
 */
class PostQuery extends \yii\db\ActiveQuery
{
    public function behaviors() {
        return [
            'lang' => [
                'class' => \oks\langs\components\QueryBehavior::className(),
                'alias' => Post::tableName()
            ],
        ];
    }
    public function active()
    {
        return $this->andWhere('[[posts.status]]=1');
    }

    /**
     * @inheritdoc
     * @return Posts[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Posts|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
    public function category($slug = null){
        $this->joinWith(['categories']);
        if($slug !== null){
            $this->where(['categories.slug' => $slug]);
        }
        return $this;
    }
    public function videos(){
        $this->joinWith(['videos.files']);
        return $this;
    }
    public function top(){
        return $this->andWhere(['top' => 1]);
    }
    public function tags($tag = null){
        $this->joinWith(['tags']);
            if($tag !== null){
                $this->andWhere(['tag' => $tag]);
            }
        return $this;
    }
    public function popular(){
        $this->orderBy(['views' => SORT_DESC]);
        return $this;
    }

    public function slug($slug = null){
        if($slug == null){return false;}
        $this->active();
       // $this->lang();
        $this->andWhere(['slug' => $slug]);
        return $this;
    }
    /**
     * @return mixed
     */


}
