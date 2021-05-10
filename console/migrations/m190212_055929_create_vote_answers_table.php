<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%vote_answers}}`.
 */
class m190212_055929_create_vote_answers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%vote_answers}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'sort' => $this->integer(),
            'questions_id' => $this->integer()
        ]);

        $this->createIndex(
            'idx-vote_answers-questions_id',
            '{{%vote_answers}}',
            'questions_id'
        );

        $this->addForeignKey(
            'fk-vote_answers-vote_questions-id',
            '{{%vote_answers}}',
            '[[questions_id]]',
            '{{%vote_questions}}',
            '[[id]]',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->createIndex(
            'idx-vote_answers-questions_id',
            '{{%vote_answers}}'
        );

        $this->addForeignKey(
            'fk-vote_answers-vote_questions-id',
            '{{%vote_answers}}'
        );

        $this->dropTable('{{%vote_answers}}');
    }
}
