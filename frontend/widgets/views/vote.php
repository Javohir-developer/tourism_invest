<?php
/**
 * @var $file \oks\filemanager\models\Files
 */

$model = \common\models\Pages::getFiles();
if (count($model->files) > 0){
$files = $model->allFiles('files');
}
?>
<div class="index_document_wrapper">
    <div class="bcontainer">
        <div class="index_document_block">
            <div class="left">
                <div class="cause_opros">
                    <div class="opros_title"><?=__('Опрос недели')?></div>
                    <div class="line_block"></div>
                </div>
                <a href="<?=\yii\helpers\Url::to('/vote')?>" class="learn_more_link"><?= __('Посмотреть все опросы') ?></a>
                <div class="opros_text"><?= count($vote) > 0 ? $vote->title : $answer['title']; ?></div>
                <div class="index-form-block-wrapper <?= count($vote) > 0 ? '' : 'active' ?>">
                    <div class="form_block">
                        <form name="VoteResult" action="<?= \yii\helpers\Url::to('/site/vote') ?>" method="post">
                            <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>"
                                   value="<?= Yii::$app->request->csrfToken ?>">
                            <input type="hidden" value="<?= $vote->id ?>" name="VoteResult[questions_id]">
                            <?php foreach ($answers as $answer) : ?>
                                <div class="form_group">
                                    <input type="checkbox" name="VoteResult[answer_id]" id="chek<?= $answer->id ?>"
                                           value="<?= $answer->id ?>">
                                    <label for="chek<?= $answer->id ?>"><span class="text"><?= $answer->title ?></span>
                                        <span class="square"></span>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                            <button type="submit" class="button_class"><?= __('Проголосовать') ?></button>
                        </form>
                    </div>
                    <div class="progress-bar-wrapper">
                        <?php foreach ($dataToResponse as $result) : ?>
                            <div class="progress-title"><?= $result['answer'] ?></div>
                            <div class="animated_progress">
                                <span data-progress="<?= ceil($result['count'] * 100 / array_sum($summ)) ?>%"></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="list_document_block">
                    <div class="list_document_block_title_block">
                        <div class="title"><?= __('Перечень документов') ?></div>
                        <div class="line_block"></div>
                    </div>
                    <a href="#" class="list_document_learn_more"><?= __('Посмотреть все документы') ?></a>
                    <div class="file_block_wrapper">
                        <?php $i=0; foreach ($files as $file) : ?>
                            <div class="file_block">
                                <div class="img">
                                   <img src="<?= $this->getImageUrl('/img/'.$file->type.'.svg')?>">
                                </div>
                                <div class="file_text">
                                    <div class="title"><?= $file->title?></div>
                                    <div class="block_downloads">
                                        <div class="size_file"><?= Yii::$app->formatter->asShortSize(\common\components\Utils::fileSize($file))?></div>
                                        <a href="<?= $file->src() ?>"><?=__('Скачать')?></a>
                                    </div>
                                </div>
                            </div>
                        <?php $i++; if ($i == 4) break; endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>