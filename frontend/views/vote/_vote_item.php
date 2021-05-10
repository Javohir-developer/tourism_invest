<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 16.02.2019
 * Time: 10:55
 */
$answers = $model->getVoteAnswers()->all();
?>
<div class="poll <?= (($index) % 3 == 0) ? 'no_padding_no_border' : ''?>">
    <div class="poll_title">
        <?=$model->title?>
    </div>
    <div class="poll_form">
        <div class="form_block">
            <form name="VoteResult" action="<?= \yii\helpers\Url::to('/site/vote') ?>" method="post">
                <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>"
                       value="<?= Yii::$app->request->csrfToken ?>">
                <input type="hidden" value="<?= $vote->id ?>" name="VoteResult[questions_id]">
                <?php foreach ($answers as $answer) : ?>
                    <div class="form_group">
                        <input type="checkbox" name="" id="chek<?=$answer->id?>">
                        <label for="chek<?=$answer->id?>">
                            <span class="text"><?=$answer->title?></span>
                            <span class="square"></span>
                        </label>
                    </div>
                <?php endforeach; ?>
                <button class="button_class"><?= __('Проголосовать') ?></button>
            </form>
        </div>
    </div>
</div>
