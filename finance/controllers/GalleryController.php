<?php
namespace finance\controllers;

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
        $dataProvider->query->where(['type' => PhotoGallery::TYPE_PORTAL]);
        $dataProvider->query->where(['lang' => Lang::getLangId()]);
        $dataProvider->query->orderBy(['id' => SORT_DESC]);
        $dataProvider->pagination->pageSize = 9;
        return $this->render('index',[
            'dataProvider'=>$dataProvider
        ]);
    }

    public function actionVideo()
    {
        $portfolioSearch = new \common\models\VideoGallerySearch();
        $dataProvider = $portfolioSearch->search(\Yii::$app->request->queryParams);
        $dataProvider->query->orderBy(['id' => SORT_DESC]);
        $dataProvider->query->where(['lang' => Lang::getLangId()]);
        $dataProvider->pagination->pageSize = 9;
        return $this->render('gallery',[
            'dataProvider'=>$dataProvider
        ]);
    }

    public function actionPhotoView($slug)
    {
        $model = $this->findModel($slug);
        if ($model->lang !== Lang::getLangId()) {
            $model = PhotoGallery::find()
                ->andWhere(['lang' => Lang::getLangId(), 'lang_hash' => $model->lang_hash])
                ->one();
            if (!($model instanceof PhotoGallery)) {
                return $this->redirect('/');
            }
        }
        return $this->render('photo-view', compact('model'));
    }

    public function actionVideoGallery($slug)
    {
        $videos = $this->findModelVideo($slug);
        if ($videos->lang !== Lang::getLangId()) {
            $videos = VideoGallery::find()
                ->andWhere(['lang' => Lang::getLangId(), 'lang_hash' => $videos->lang_hash])
                ->one();
            if (!($videos instanceof VideoGallery)) {
                return $this->redirect('/');
            }
        }
        return $this->render('video-gallery', [
            'videos' => $videos,
        ]);
    }

    public function findModel($slug){
        if (($model = PhotoGallery::find()->where(['slug' => $slug])->one()) !== null){
            return $model;
        } else {
            return new NotFoundHttpException(__('The requested page does not exist.'));
        }
    }

    private function findModelVideo($slug)
    {
        if (($model = VideoGallery::find()->where(['slug' => $slug])->one()) !== null){
            return $model;
        } else {
            return new NotFoundHttpException(__('The requested page does not exist.'));
        }
    }
}
