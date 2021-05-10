<?php

use yii\db\Migration;

/**
 * Handles the creation of table `answer`.
 */
class m181102_121312_create_answer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('answer', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11),
            'text' => $this->text(),
            'question_id' => $this->integer(11),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'status' => $this->integer(11),
            'lang_hash' => $this->string(60)->notNull(),
            'lang' => $this->integer()->notNull(),
        ]);

        $this->createIndex(
            'idx-answer-user_id',
            'answer',
            'user_id'
        );

        $this->createIndex(
            'fk-answer-question_id',
            'answer',
            'question_id'
        );

        $this->addForeignKey(
            'fk-answer-user_id-user-id',
            'answer',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
        $this->addForeignKey(
            'fk-answer-question-id-question-id',
            'answer',
            'question_id',
            'question',
            'id',
            'CASCADE'
        );


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropForeignKey(
            'fk-answer-user_id-user-id',
            'answer'
        );
        $this->dropForeignKey(
            'fk-answer-question-id-question-id',
            'answer'
        );

        $this->dropIndex(
            'idx-answer-user_id',
            'answer'
        );

        $this->dropIndex(
            'fk-answer-question_id',
            'answer'
        );

        $this->dropTable('answer');
    }
}
