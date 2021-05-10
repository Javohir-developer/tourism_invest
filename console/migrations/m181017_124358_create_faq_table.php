<?php

use yii\db\Migration;

/**
 * Handles the creation of table `faq`.
 */
class m181017_124358_create_faq_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$tableOptions = null;

		if ($this->db->driverName === 'mysql') {
			$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		}

        $this->createTable('faq', [
            'id' => $this->primaryKey(),
			'user_id' => $this->integer(),
			'question' => $this->text(),
			'answer' => $this->text(),
			'lang' => $this->integer(),
			'lang_hash' => $this->string(255),
			'status' => $this->integer()->defaultValue(0),
			'created_at' => $this->integer(),
			'updated_at' => $this->integer(),
        ], $tableOptions);

        $this->createIndex('index_user_id', 'faq', 'user_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    	$this->dropIndex('index_user_id', 'faq');
        $this->dropTable('faq');
    }
}
