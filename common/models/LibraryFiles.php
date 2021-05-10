<?php

namespace common\models;

use oks\filemanager\models\Files;
use yii\behaviors\AttributeBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "library_book".
 *
 * @property int $file_id
 * @property string $title Название
 * @property string $description Описание
 * @property string $type Тип
 * @property string $file Файл
 * @property int $date_create Дата добавление
 * @property int $user_id Пользователь
 */
class LibraryFiles extends Files
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
        return 'files';
    }

}
