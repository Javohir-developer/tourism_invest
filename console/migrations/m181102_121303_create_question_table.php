<?php

use yii\db\Migration;

/**
 * Handles the creation of table `question`.
 */
class m181102_121303_create_question_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('question', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11),
            'text' =>$this->text(),
            'status' =>$this->integer(11),
            'answer_id' => $this->integer(11),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'lang_hash' => $this->string(60)->notNull(),
            'lang' => $this->integer()->notNull(),
        ]);

        $this->createIndex(
            'idx-quesion-user_id',
            'question',
            'user_id'
        );

        $this->addForeignKey(
            'fk-question-user_id-user-id',
            'question',
            'user_id',
            'user',
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
            'fk-question-user_id-user-id',
            'question'
        );
        $this->dropIndex(
            'idx-quesion-user_id',
            'question'
        );

        $this->dropTable('question');

    }
}
