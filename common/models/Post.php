<?php

namespace common\models;

use common\components\InputModelBehavior;
use common\modules\translit\LatinBehaviour;
use common\modules\translit\LatinTokenizer;
use common\modules\translit\TextInterpreter;
use oks\categories\behaviors\CategoryModelBehavior;
use oks\categories\models\Categories;
use oks\core\behaviors\SlugBehavior;
use oks\langs\components\Lang;
use oks\langs\components\ModelBehavior;
use oks\langs\models\Langs;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $intro
 * @property string $content
 * @property string $image
 * @property string $lang_hash
 * @property string $type_to
 * @property string $category
 * @property int $lang
 * @property int $top
 * @property int $type
 * @property int $view
 * @property int $published_on
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 *
 */
class Post extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE = 1;
    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;
    const TYPE_PORTAL = 0;
    const TYPE_CENTER = 1;
    private $_category;
    private $_postsimagespostersdata;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    public static function getNews($limit = 5, $category)
    {
        $category_id = Categories::find()->where(['lang' => Lang::getLangId(), 'slug' => $category])->asArray()->one();
        return self::find()->where(['like', 'category', $category_id['id']])->andWhere(['status' => self::STATUS_ENABLED])->orderBy(['published_on' => SORT_DESC])->limit($limit)->all();
    }

    public static function find()
    {
        return new PostQuery(get_called_class());
    }

    public static function getAllNews($limit = 5)
    {
        $category_id = Categories::find()->where(['lang' => Lang::getLangId(), 'slug' => 'news_center'])->asArray()->one();
        if ($category_id == null) {
            return null;
        }
        return self::find()->where(['like', 'category', $category_id['id']])->andWhere(['status' => self::STATUS_ENABLED])->orderBy(['published_on' => SORT_DESC])->limit($limit)->all();
    }

    public static function getUzAsbo($limit = 1)
    {
        $category_id = Categories::find()
            ->where(['lang' => Lang::getLangId(), 'slug' => 'school'])
            ->asArray()->one();
        if ($category_id == null) {
            return null;
        }
        return self::find()
            ->where(['like', 'category', $category_id['id']])
            ->andWhere(['status' => self::STATUS_ENABLED])
            ->andWhere(['lang' => Lang::getLangId()])
            ->orderBy(['id' => SORT_DESC])
            ->limit($limit)->one();
    }

    public static function getAllPrice($limit)
    {
        $category_id = Categories::find()->where(['lang' => Lang::getLangId(), 'slug' => 'price'])->asArray()->one();
        return self::find()->where(['like', 'category', $category_id['id']])->andWhere(['status' => self::STATUS_ENABLED])->orderBy(['id' => SORT_DESC])->limit($limit)->all();
    }

    public static function getBuys($limit = 1)
    {
        $category_id = Categories::find()
            ->where(['lang' => Lang::getLangId(), 'slug' => 'government'])
            ->asArray()->one();
        if ($category_id == null) {
            return null;
        }
        return self::find()
            ->where(['like', 'category', $category_id['id']])
            ->andWhere(['status' => self::STATUS_ENABLED])
            ->andWhere(['lang' => Lang::getLangId()])
            ->orderBy(['id' => SORT_DESC])
            ->limit($limit)->one();
    }

    public static function getAllInbox($limit = 4)
    {
        $category_id = Categories::find()->where(['lang' => Lang::getLangId(), 'slug' => 'inbox'])->asArray()->one();
        if ($category_id == null) {
            return null;
        }
        return self::find()->where(['like', 'category', $category_id['id']])->andWhere(['status' => self::STATUS_ENABLED])->orderBy(['published_on' => SORT_DESC])->limit($limit)->all();
    }

    public static function getAllTenders($limit = 2)
    {
        $category_id = Categories::find()
            ->where(['lang' => Lang::getLangId(), 'slug' => 'tenders'])
            ->asArray()->one();
        if ($category_id == null) {
            return null;
        }
        return self::find()
            ->where(['like', 'category', $category_id['id']])
            ->andWhere(['status' => self::STATUS_ENABLED])
            ->andWhere(['lang' => Lang::getLangId()])
            ->orderBy(['published_on' => SORT_DESC])
            ->limit($limit)->all();
    }

    public static function getAllPosts($limit = 9)
    {
        return self::find()
            ->where(['lang' => Lang::getLangId()])
            ->andWhere(['status' => 1])
            ->limit($limit)
            ->orderBy(['id' => SORT_DESC])
            ->all();
    }

    public static function getTopPosts($limit, $category = null)
    {
        if ($category == null) {
            return self::find()
                ->where(['lang' => Lang::getLangId(), 'top' => 1])
                ->andWhere(['status' => 1])
                ->orderBy(['id' => SORT_DESC])
                ->limit($limit)
                ->all();
        } else {
            $posts = self::find()
//                ->leftJoin('post_categories', '"post_categories.post_id" = "post.id"')
//                ->andWhere(['category_id' => $category])
                ->andWhere(['lang' => Lang::getLangId(), 'top' => 1])
                ->andWhere(['status' => 1])
                ->orderBy(['id' => SORT_DESC])
                ->all();
            $data = [];
            foreach ($posts as $post) {
                if (count($data) == 2) {
                    return $data;
                }
                if (PostCategory::find()->andWhere(['post_id' => $post->id, 'category_id' => $category])->exists()) {
                    $data[] = $post;
                }
            }
            return $data;
        }
    }

    public static function getAttentions($limit = 4)
    {
        $category_id = Categories::find()->where(['lang' => Lang::getLangId(), 'slug' => 'attention'])->asArray()->one();
        return self::find()->where(['like', 'category', $category_id['id']])->orderBy(['id' => SORT_DESC])->limit($limit)->one();
    }

    public static function getUsefulPosts($limit = 4)
    {
        $category_id = Categories::find()->where(['lang' => Lang::getLangId(), 'slug' => 'useful'])->asArray()->one();
        return self::find()->where(['like', 'category', $category_id['id']])->orderBy(['id' => SORT_DESC])->limit($limit)->all();
    }

    public static function getOav($limit = 4)
    {
        $category_id = Categories::find()->where(['lang' => Lang::getLangId(), 'slug' => 'oav-biz-haqimizda'])->asArray()->one();
        return self::find()->where(['like', 'category', $category_id['id']])->orderBy(['id' => SORT_DESC])->limit($limit)->all();
    }

    public static function sendtelegram($message, $images)
    {
        $botToken = "761375082:AAGgM_O1Y3gLWT0CxTX13L_5zWW1fk7RVAU";
        $website = "https://api.telegram.org/bot" . $botToken;
        $chatId = '744176';
        $url = $website . '/sendPhoto?chat_id=' . $chatId . '&photo=' . $images . '&caption=' . urlencode($message) . '&parse_mode=HTML';
        return @file_get_contents($url);

    }

    public static function params()
    {
        $params['archive']['pagination']['pagSize'] = 9;
        return $params;
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            'lang' => [
                'class' => ModelBehavior::className(),
                'fill' => [
                    'image' => '',
                    'published_on' => '',
                    'title' => function ($value, $model) {
                        return Post::doTranslate($value);
                    },
                    'intro' => function ($value, $model) {
                        return Post::doTranslate($value);
                    },
                    'content' => function ($value, $model) {
                        return Post::doTranslate($value);
                    }
                ],
            ],
            'slug' => [
                'class' => SlugBehavior::className(),
                'attribute' => 'slug',
                'attribute_title' => 'title',
            ],
            'category_model' => [
                'class' => CategoryModelBehavior::className(),
                'attribute' => 'category',
                'separator' => ',',
            ],
            'file_manager_model' => [
                'class' => InputModelBehavior::className(),
                'delimitr' => ','
            ],
        ];
    }

    public static function doTranslate($plain)
    {
        if (\Yii::$app->language == 'uz' || \Yii::$app->language == 'oz') {
            $textInterpreter = new TextInterpreter();
            $textInterpreter->setTokenizer(new LatinTokenizer());
            $textInterpreter->addBehavior(new LatinBehaviour([]));

            $string = $textInterpreter->process($plain)->getText();

            return $string;
        }

        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['slug'], 'unique'],
            [['content'], 'string'],
            [['status'], 'safe'],
            [['lang', 'view', 'published_on', 'created_at', 'updated_at', 'top'], 'integer'],
            [['title', 'slug', 'intro', 'category', 'image'], 'string', 'max' => 255],
            [['lang_hash'], 'string', 'max' => 60],
            [
                ['lang'],
                'exist',
                'skipOnError' => true,
                'targetClass' => Langs::className(),
                'targetAttribute' => ['lang' => 'lang_id']
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'intro' => 'Intro',
            'content' => 'Content',
            'image' => 'Image',
            'category' => 'Category',
            'lang_hash' => 'Hash',
            'lang' => 'Lang ID',
            'view' => 'View',
            'published_on' => 'Published On',
            'status' => 'Status',
            'top' => 'Top',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLang()
    {
        return $this->hasOne(Langs::className(), ['id' => 'lang']);
    }

    public function getpostsimagespostersdata()
    {
        return $this->_postsimagespostersdata;
    }

    public function setpostsimagespostersdata($value)
    {
        return $this->_postsimagespostersdata = $value;
    }

    public function getCategory()
    {
        return $this->_category;
    }

    public function setCategory($value)
    {
        return $this->_category = $value;
    }

    /**
     * @param Post $post
     * @param int $limit
     * @return array|Post[]
     */
    public function getRelatedPosts($post, $limit = 6)
    {
        $cat_id = $post->getPostscategories()->all();
        $arr = [];
        foreach ($cat_id as $item) {
            $arr[] = $item->category_id;
        }
        $res = PostCategory::find()
            ->with(['post' => function ($query) use ($post) {
                $query
                    ->andWhere(['lang' => Lang::getLangId()])
                    ->andFilterWhere(['<>', 'slug', $post->slug]);
            }])
            ->where(['in', 'post_categories.category_id', $arr])
            ->limit($limit)->all();
        $arr = [];
        foreach ($res as $item) {
            $arr[] = $item->post;
        }
        return $arr;
    }

    public function getPostscategories()
    {
        return $this->hasMany(PostCategory::className(), ['post_id' => 'id']);
    }

    public function getSingleLink()
    {
        $category = $this->category;
        if (!($category instanceof Categories)) {
            $category = "post";
        } else {
            $category = $category->slug;
        }

        return \yii\helpers\Url::to(['/post/view', 'slug' => $this->slug, 'category' => $category], true);
    }

    public function afterSave($insert, $changedAttributes)
    {
        $categories = $this->getCategories()->all();
        foreach ($categories as $category) {
            $this->type_to .= "," . $category->type;
        }
        $this->updateAttributes(['type_to']);

        parent::afterSave($insert, $changedAttributes); // TODO: Change the autogenerated stub
    }

    public function getCategories()
    {
        return $this->hasMany(Categories::className(), ['id' => 'category_id'])->viaTable('post_categories', ['post_id' => 'id']);
    }
}
