<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%vote_questions}}`.
 */
class m190212_055906_create_vote_questions_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%vote_questions}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'created_at' => $this->integer(),
            'top' => $this->string(),
            'status' => $this->string(),
            'lang' => $this->integer(),
            'lang_hash' => $this->string(60)
        ]);

        $this->createIndex(
            'idx-vote_questions-langs-lang',
            '{{%vote_questions}}',
            'lang'
        );

        $this->addForeignKey(
            'fk-vote_questions-langs-lang',
            '{{%vote_questions}}',
            '[[lang]]',
            '{{%langs}}',
            '[[lang_id]]',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-vote_questions-langs-lang',
            '{{%vote_questions}}'
        );

        $this->dropIndex(
            'idx-vote_questions-langs-lang',
            '{{%vote_questions}}'
        );

        $this->dropTable('{{%vote_questions}}');
    }
}
