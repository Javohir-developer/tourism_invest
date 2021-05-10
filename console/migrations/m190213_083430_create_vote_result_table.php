<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%vote_result}}`.
 */
class m190213_083430_create_vote_result_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%vote_result}}', [
            'id' => $this->primaryKey(),
            'questions_id' => $this->integer(),
            'answer_id' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%vote_result}}');
    }
}
