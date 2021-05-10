<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 16.10.2018
 * Time: 16:51
 */

namespace frontend\widgets;

use common\models\VoteAnswers;
use common\models\VoteQuestions;
use common\models\VoteResult;
use oks\langs\components\Lang;
use yii\base\Widget;

class Vote extends Widget {

    public function run()
    {
        $votes = VoteQuestions::find()->where(['status' => 1, 'lang' => Lang::getLangId()])->all();
        $num = rand(0, count($votes) - 1);
        $vote = $votes[$num];
        if (\Yii::$app->request->cookies->has('voted_ids')){
            $voted_ids = \Yii::$app->request->cookies->getValue('voted_ids');
            $voted_ids = explode(',', $voted_ids);
            $id = $vote['id'];
            if (in_array($id, $voted_ids)){
                $allAnswers = VoteAnswers::find()->where(['questions_id' => $id])->all();

                foreach($allAnswers as $ans) {
                    $count = VoteResult::find()->where(['questions_id'=> $id, 'answer_id'=> $ans->id])->count();
                    $dataToResponse[] = array("answer" => $ans['title'], "count" => $count);
                    $summ[] = $count;
                }

                return $this->render('vote',[
                    'dataToResponse' => $dataToResponse,
                    'summ' => $summ,
                    'answer' => $vote
                ]);
            }
        };

        $answers = !empty($vote) ? $vote->getVoteAnswers()->all() : '';

        return $this->render('vote',[
            'vote' => $vote,
            'answers' => $answers
        ]);
    }
}