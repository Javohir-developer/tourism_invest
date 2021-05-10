<?php
namespace frontend\controllers;

use common\models\PhotoGallery;
use common\models\Post;
use common\models\VideoGallery;
use common\models\VideoGallerySearch;
use oks\langs\components\Lang;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\web\NotFoundHttpException;

/**
 * Site controller
 */
class GalleryController extends Controller
{
    const STATUS_ACTIVE = 1;
    const STATUS_DEACTIVE = 0;
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $portfolioSearch = new \common\models\PhotoGallerySearch();
        $dataProvider = $portfolioSearch->search(\Yii::$app->request->queryParams);
        $dataProvider->query->orderBy(['id' => SORT_DESC]);
        $dataProvider->pagination->pageSize = 9;
        return $this->render('index',[
            'dataProvider'=>$dataProvider
        ]);
    }

    public function actionGallery()
    {
        $portfolioSearch = new \common\models\PhotoGallerySearch();
        $dataProvider = $portfolioSearch->search(\Yii::$app->request->queryParams);
        $dataProvider->query->orderBy(['id' => SORT_DESC]);
        $dataProvider->pagination->pageSize = 9;
        return $this->render('gallery',[
            'dataProvider'=>$dataProvider
        ]);
    }

    public function actionPhotoView($slug)
    {
        $model = $this->findModel($slug);
        return $this->render('photo-view', compact('model'));
    }

    public function actionVideoGallery()
    {
        $searchModel = new VideoGallerySearch();
        $dataProvider = $searchModel->search(\Yii::$app->request->getQueryParams());
        $dataProvider->pagination->pageSize = 9;

        return $this->render('video-gallery', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function findModel($slug){
        if (($model = PhotoGallery::find()->where(['slug' => $slug])->one()) !== null){
            return $model;
        } else {
            return new NotFoundHttpException(__('The requested page does not exist.'));
        }
    }
}
