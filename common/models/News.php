<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $text_uz
 * @property string $text_ru
 * @property string $text_en
 * @property string|null $images
 * @property string $date
 * @property int $status
 * @property int $views
 */
class News extends \yii\db\ActiveRecord
{
    public $imageFile;
    const SCENARIO_CREATE  =  "create";
    const SCENARIO_UPDATE  =  "update";
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'text_uz', 'text_ru', 'text_en'], 'required'],
            [['text_uz', 'text_ru', 'text_en'], 'string'],
            [['date'], 'safe'],
            [['status', 'views'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'images'], 'string', 'max' => 225],
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_uz' => Yii::t('app', ' Nom'),
            'name_ru' => Yii::t('app', ' Nom'),
            'name_en' => Yii::t('app', ' Nom'),
            'text_uz' => Yii::t('app', ' Matn'),
            'text_ru' => Yii::t('app', ' Matn'),
            'text_en' => Yii::t('app', ' Matn'),
            'images' => 'Images',
            'date' => 'Date',
            'status' => 'Status',
            'views' => 'Views',
        ];
    }



    public function scenarios(){
        return [
            self::SCENARIO_CREATE =>['name_uz', 'name_ru', 'name_en', 'text_uz', 'text_ru', 'text_en', 'imageFile'],
            self::SCENARIO_UPDATE =>[]
        ];
    }

    public function Uploads()
    {
        $this->imageFile = UploadedFile::getInstance($this, 'imageFile');
        if ($this->validate()) {
            if (!empty($this->imageFile) && $this->imageFile == true){
                $file_name = ((int) (microtime(true) * (1000))) .'.'. $this->imageFile->extension;
                $this->imageFile->saveAs('@frontend/web/uploads/images/' . $file_name, false);
                $this->images = $file_name;
            }

            if ($this->save()){
                return true;
            }
        } else {
            return false;
        }
    }

    public function View($id){
        $this->findOne(['id' => $id]);
        $this->views = $this->views + 1;
        $this->save(false);
    }
    
    public function getMonth(){
        switch (Yii::$app->formatter->asDate($this->date,'M')){
            case 1:
                $this->date = Yii::t('app','Yanvar');
                break;
            case 2:
                $this->date = Yii::t('app','Fevral');
                break;
            case 3:
                $this->date = Yii::t('app','Mart');
                break;
            case 4:
                $this->date = Yii::t('app','Aprel');
                break;
            case 5:
                $this->date = Yii::t('app','May');
                break;
            case 6:
                $this->date = Yii::t('app','Iyun');
                break;
            case 7:
                $this->date = Yii::t('app','Iyul');
                break;
            case 8:
                $this->date = Yii::t('app','Avgust');
                break;
            case 9:
                $this->date = Yii::t('app','Sentabr');
                break;
            case 10:
                $this->date = Yii::t('app','Oktabr');
                break;
            case 11:
                $this->date = Yii::t('app','Noyabr');
                break;
            case 12:
                $this->date = Yii::t('app','Dekabr');
                break;
        }
        return $this->date;
    }
}
