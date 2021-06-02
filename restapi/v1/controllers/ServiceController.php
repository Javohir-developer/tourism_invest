<?php
namespace restapi\v1\controllers;

use common\models\Service;
use common\models\ServiceTranslations;
use Yii;
use yii\base\BaseObject;
use yii\web\NotFoundHttpException;
use yii\data\ActiveDataProvider;
class ServiceController extends MyController
{

    public function actionIndex(){
        $ervices = Service::find()->all();
        $massiv = array();
        foreach ($ervices as $ervice){
            array_push($massiv,
                [
                    'id'=> $ervice->id,
                    'names'=>[$ervice->servicetrans],
                    'category'=>[$ervice->categorytrans],
                    'price'=> $ervice->price,
                    'user_id'=> $ervice->user_id,
                ]
            );

        }

        return new ActiveDataProvider([
            'query' => $ervices
        ]);
    }

    public function actionCreate(){
        $request = Yii::$app->request;
        $bodyParams  = Yii::$app->request->bodyParams;
        $params = array_merge($bodyParams );

        $model =  new Service();
        $model1 =  new ServiceTranslations();
        $model->load($params , '');
        $model1->load($params , '');

        if ($model->validate() === true && $model1->validate() === true){
            if ($model->creates($request)){
                return ['result'=>200];
            }
        }
        else {
            return !empty($model->getErrors()) || !empty($model1->getErrors());
        }
    }


    public function actionUpdate(){
        $request = $request = Yii::$app->request;
        $model =  Service::findOne($request->getBodyParam('id'));
        if (!empty($request->getBodyParam('id'))){
            if ($model->updates($request)){
                return ['result'=>200];
            }else{
                return new ActiveDataProvider([
                    'query' => $model
                ]);
            }
        }
    }




    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return [ 'result'=> 200];
    }


    public function actionView($id)
    {
        $service = $this->findModel($id);
        return new ActiveDataProvider([
            'query' => $service
        ]);
    }



    protected function findModel($id)
    {
        if (($model = Service::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
