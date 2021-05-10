<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "question_answers".
 *
 * @property int $question_id
 * @property int $answer_id
 *
 * @property VoteAnswers $question
 * @property VoteQuestions $question0
 */
class QuestionAnswers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'question_answers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['question_id', 'answer_id'], 'integer'],
            [['question_id'], 'exist', 'skipOnError' => true, 'targetClass' => VoteAnswers::className(), 'targetAttribute' => ['question_id' => 'id']],
            [['question_id'], 'exist', 'skipOnError' => true, 'targetClass' => VoteQuestions::className(), 'targetAttribute' => ['question_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'question_id' => 'Question ID',
            'answer_id' => 'Answer ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuestion()
    {
        return $this->hasOne(VoteAnswers::className(), ['id' => 'question_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuestion0()
    {
        return $this->hasOne(VoteQuestions::className(), ['id' => 'question_id']);
    }
}
