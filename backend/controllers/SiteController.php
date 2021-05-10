<?php
namespace backend\controllers;

use common\models\User;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actionError() {

        $exeption = \Yii::$app->errorHandler->exception;
        $code = $exeption->statusCode;
        $name = $exeption->getName();
        $message = $exeption->getMessage();

        \Yii::$app->layout = 'error_layout';
        return $this->render('error', [
            'code' => $code,
            'name' => $name,
            'message' => $message
        ]);
    }


    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        Yii::$app->layout = 'no_carcas';
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post())) {
            $user = User::find()->where(['username' => $model->username])->one();
            $model->email = $user->email;
            if ($model->login()) {
                return $this->redirect(\Yii::$app->request->referrer);
            }
            else {
            	return $this->render('login', [
					'model' => $model,
				]);
            }
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
