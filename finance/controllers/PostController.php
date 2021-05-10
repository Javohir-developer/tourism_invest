<?php
namespace finance\controllers;

use common\models\Post;
use common\models\PostSearch;
use oks\categories\models\Categories;
use oks\langs\components\Lang;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;

/**
 * Site controller
 */
class PostController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

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
        return $this->render('index');
    }

    public function actionView($slug)
    {
        $model = $this->findModel($slug);
        if ($model->lang !== Lang::getLangId(\Yii::$app->language)) {
            $model = Post::find()->andWhere(['lang' => Lang::getLangId(), 'lang_hash' => $model->lang_hash])->one();
            if (!($model instanceof Post)) {
                return $this->redirect('/'.\Yii::$app->language);
            }
        }
        $model->updateCounters(['view' => 1]);
        $category = explode(',', $model->category);
        $related_post = Post::find()->where(['lang' => Lang::getLangId(), 'status' => Post::STATUS_ACTIVE])
            ->andWhere(['like', 'category', $category[0]])->orderBy(['id' => SORT_ASC])->limit(6)->all();

        return $this->render('view', compact('model', 'related_post'));
    }

    public function findModel($slug){
        if (($model = Post::find()->where(['slug' => $slug])->one()) !== null){
            return $model;
        } else {
            throw new NotFoundHttpException(__('The requested page does not exist.'), 404);
        }
    }

    public function actionList($slug = null) {
        if ($slug == null) {
            $top_posts = Post::getTopPosts(2);
            $searchModel = new PostSearch();
            $dataProvider = $searchModel->search(\Yii::$app->request->getQueryParams(), Post::STATUS_ENABLED);
            $dataProvider->pagination->pageSize = 12;

            return $this->render('list', [
                'dataProvider' => $dataProvider,
                'top_posts' => $top_posts
            ]);
        } else {
            $category = Categories::find()->where(['slug' => $slug, 'lang' => Lang::getLangId()])->one();
            $top_posts = Post::getTopPosts(2, $category->id);
            $searchModel = new PostSearch();
            $dataProvider = $searchModel->search(
                \Yii::$app->request->getQueryParams(),
                Post::STATUS_ENABLED, $category->id
            );
            $dataProvider->pagination->pageSize = 6;

            return $this->render('list', [
                'dataProvider' => $dataProvider,
                'top_posts' => $top_posts
            ]);
        }
    }

}
