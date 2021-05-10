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
use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property string $title
 * @property string $body
 * @property string $slug
 * @property string $copyright
 * @property string $files
 * @property string $anons
 * @property string $category_id
 * @property int $view
 * @property int $published_on
 * @property int $sidebar
 * @property int $lang
 * @property int $lang_hash
 * @property int $type
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Pages extends \yii\db\ActiveRecord
{
    private $_pagesfilespostersdata;

    private $_category_id;
    const STATUS_ACTIVE = 1;

    const TYPE_PORTAL = 0;
    const TYPE_CENTER = 1;

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            'lang' => [
                'class' => ModelBehavior::className(),
                'fill' => [
                    'status' => '',
                    'title' => function($value, $model) {
                        return Pages::doTranslate($value);
                    },
                    'anons' => function($value, $model) {
                        return Pages::doTranslate($value);
                    },
                    'body' => function($value, $model) {
                        return Pages::doTranslate($value);
                    }
                ],
            ],
            'slug' => [
                'class' => SlugBehavior::className(),
                'attribute' => 'slug',
                'attribute_title'=> 'title',
            ],
            'file_manager_model' => [
                'class' => InputModelBehavior::className(),
                'delimitr' => ','
            ],
            'category_model' => [
                'class' => CategoryModelBehavior::className(),
                'attribute' => 'category_id',
                'separator' => ',',
            ],
        ];
    }

    public static function doTranslate($plain) {
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
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['body', 'category_id', 'anons'], 'string'],
            [['view', 'sidebar', 'lang', 'status', 'type', 'created_at', 'updated_at', 'published_on'], 'integer'],
            [['title', 'slug', 'copyright', 'files'], 'string', 'max' => 255],
            [['slug'], 'unique'],
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
            'body' => 'Body',
            'slug' => 'Slug',
            'files' => 'Files',
            'anons' => 'Anons',
            'sidebar' => 'Sidebar',
            'category_id' => 'Category',
            'copyright' => 'Copyright',
            'view' => 'View',
            'type' => 'Type',
            'status' => 'Status',
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

    public function getpagesfilespostersdata(){
        return $this->_pagesfilespostersdata;
    }
    public function setpagesfilespostersdata($value){
        return $this->_pagesfilespostersdata = $value;
    }

    public function getPagescategories()
    {
        return $this->hasMany(PagesCategory::className(), ['pages_id' => 'id']);
    }

    public function getCategories()
    {
        return $this->hasMany(Categories::className(), ['id' => 'category_id'])->viaTable('pages_categories', ['pages_id' => 'id']);
    }

    public static function getFiles() {
        $category_id = Categories::find()->where(['lang' => Lang::getLangId(), 'slug' => 'files'])->asArray()->one();
        return self::find()->where(['like', 'category_id', $category_id['id']])->andWhere(['status' => self::STATUS_ACTIVE, 'type' => self::TYPE_PORTAL])->orderBy(['id' => SORT_DESC])->one();
    }

    public function getCategory(){
        return $this->_category_id;
    }

    public function setCategory($value){
        die();
        return $this->_category_id = $value;
    }

}
