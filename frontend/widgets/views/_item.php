<?php
use yii\widgets\ActiveForm;
use \yii\helpers\Html;
?><div class="item">
    <div class="question"><span><?=$model->text?></span>
        <div class="quiz">?</div>
    </div>
    <div class="answer">
        <div class="box question_box">
            <div class="author"><span><?=__('Задает :')?></span> <?$user = $model->getUser()->one();
                if($user):?>
                <?=$user->surname?> <?=$user->username?> <?=$user->fathet_name?></div>
            <?endif;?>
            <div class="text"><?=$model->text?></div>
        </div>
        <a href="#" class="answer_btn">Ответить</a>
        <div class="answer_form">
            <?
            if(\Yii::$app->user->identity->restr):
                $answer = new \common\models\Answer;
                $form = ActiveForm::begin();
                echo $form->field($answer, 'question_id')->hiddenInput(['value'=> $model->id])->label(false);
                echo $form->field($answer, 'text')->textarea(['rows' => 5],['placeholder' => "Пишите свой ответь"])->label(false);
                echo Html::submitButton(Yii::t('main', 'Ответить'));
                ActiveForm::end();
            elseif(Yii::$app->user->identity):
                echo _('Ответить толка Реестр').'';
            else:
                echo _('Ответить только региcтирование пользователи эсли хотите ответить Пожалуйста ').' <a href="/site/signup" style="color: #3862cc; display: inline-block;">'.__('Регистрируйтесь').'</a>';
            endif;?>
        </div>
        <div class="box answer_box">
            <?
            $user = $model->getAnswers()->one()->user;
            ?>
            <div class="author"><span><?=__('Отвечает :')?></span> <?=$user->surname?> <?=$user->username?> <?=$user->fathet_name?></div>
            <div class="text"><?=$model->getAnswers()->where(['status'=>'1'])->one()->text;?></div>
        </div>
    </div>
</div>