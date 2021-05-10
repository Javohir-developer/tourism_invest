<?php

namespace common\models;

use oks\filemanager\models\Files;
use yii\behaviors\AttributeBehavior;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "library_book".
 *
 * @property int $id
 * @property string $name
 * @property string $author
 * @property int $file_id
 * @property int $status
 *
 * @property Files $file
 * @property LibraryCategoryBooks[] $libraryCategoryBooks
 */
class LibraryBooks extends \yii\db\ActiveRecord
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
        return 'library_book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['file_id', 'status'], 'default', 'value' => null],
            [['file_id', 'status'], 'integer'],
            [['name', 'author'], 'string', 'max' => 1024],
            [['file_id'], 'exist', 'skipOnError' => true, 'targetClass' => Files::className(), 'targetAttribute' => ['file_id' => 'file_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'author' => 'Author',
            'file_id' => 'File ID',
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
     * @return array|false
     * @throws \yii\db\Exception
     */
    public function getFiles()
    {
        return LibraryFiles::findOne($this->file_id);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFile()
    {
        return $this->hasOne(Files::className(), ['file_id' => 'file_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLibraryCategoryBooks()
    {
        return $this->hasMany(LibraryCategoryBooks::className(), ['book_id' => 'id']);
    }

    public function getCategory()
    {
        return $this->hasOne(LibraryCategory::class, ['id' => 'category_id'])->via('libraryCategoryBooks');
    }

}
