<?php

namespace common\models;

use common\models\LibraryCategoryBooks;
use Yii;
use yii\behaviors\AttributeBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "library_category".
 *
 * @property int $id
 * @property string $name
 * @property int $count
 * @property int $status
 *
 * @property LibraryCategoryBooks[] $libraryCategoryBooks
 */
class LibraryCategory extends \yii\db\ActiveRecord
{
    /**
     * @return null|object|\yii\db\Connection
     * @throws \yii\base\InvalidConfigException
     */
    public static function getDb()
    {
        return \Yii::$app->get('library_db');
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'library_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['count', 'status'], 'default', 'value' => null],
            [['count', 'status'], 'integer'],
            [['name'], 'string', 'max' => 1024],
        ];
    }

    public function extraFields()
    {
        return array(
            'books'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'count' => 'Count',
            'status' => 'Status',
        ];
    }

    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            'st' => [
                'class' => AttributeBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_VALIDATE => 'status',
                ],
                'value' => function () {
                    return 1;
                }
            ]
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLibraryCategoryBooks()
    {
        return $this->hasMany(LibraryCategoryBooks::className(), ['category_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(LibraryBooks::class, ['id' => 'book_id'])->via('libraryCategoryBooks');
    }
}
