<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "library_category_books".
 *
 * @property int $category_id
 * @property int $book_id
 *
 * @property LibraryBooks $book
 * @property LibraryCategory $category
 */
class LibraryCategoryBooks extends \yii\db\ActiveRecord
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
        return 'library_category_books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'book_id'], 'default', 'value' => null],
            [['category_id', 'book_id'], 'integer'],
            [['book_id'], 'exist', 'skipOnError' => true, 'targetClass' => LibraryBooks::className(), 'targetAttribute' => ['book_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => LibraryCategory::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'category_id' => 'Category ID',
            'book_id' => 'Book ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBook()
    {
        return $this->hasOne(LibraryBooks::className(), ['id' => 'book_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(LibraryCategory::className(), ['id' => 'category_id']);
    }
}
