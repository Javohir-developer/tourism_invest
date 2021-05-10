<?php
namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $password_repeat;
    public $phone;
    public $region_id;
    public $city_id;
    public $company;
    public $position;
    public $status;
    public $data;
    public $surname;
    public $father_name;
    public $inn;
    public $accept;
    public $day;
    public $month;
    public $year;
    public $captcha;
    public $restr;
    public $type;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            [['username','surname','accept','father_name','inn'], 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => __('This username has already been taken.')],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => __('This email address has already been taken.')],
            [['captcha'], 'captcha'],
            [['captcha'], 'required'],
            [['password'], 'required'],
            [['accept'], 'required'],
            [['data', 'day', 'month', 'year','restr','type'], 'integer'],
            ['password', 'string', 'min' => 6],
            ['password_repeat', 'required'],
            ['password_repeat', 'compare', 'compareAttribute'=>'password', 'message'=> __("Passwords don't match")],
            [['surname', 'father_name', 'inn'], 'string'],
        ];
    }


    public function attributeLabels()
    {
    return [
        'username' => Yii::t('main','Имя'),
        'surname' => Yii::t('main','Фамилия'),
        'father_name' => Yii::t('main','Отчество'),
        'email' => Yii::t('main','Электронная почта'),
        'data' => Yii::t('main','Дата рождения'),
        'inn' => Yii::t('main','Номер ИНН'),
        'password' => Yii::t('main','Пароль'),
        'password_repeat' => Yii::t('main','Повторите пароль'),
        'captcha' => Yii::t('main','Введите слово на картинке'),
        'accept' => Yii::t('main','Согласите праву'),
        'type' => Yii::t('main','Админ'),
       ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->status = $this->status;
        $user->surname = $this->surname;
        $user->inn = $this->inn;
        $user->fathet_name = $this->father_name;
        $user->data = $this->data;
        $user->region_id = $this->region_id;
        $user->city_id = $this->city_id;
        $user->setPassword($this->password);
        $user->generateAuthKey();

        $user->data = strtotime("{$this->day}.{$this->month}.{$this->year}");
        
        return $user->save() ? $user : null;
    }
}
