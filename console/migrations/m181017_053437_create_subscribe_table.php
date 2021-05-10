<?php

use yii\db\Migration;

/**
 * Handles the creation of table `subscribe`.
 */
class m181017_053437_create_subscribe_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('subscribe', [
            'id' => $this->primaryKey(),
			'email' => $this->string(255)->notNull(),
			'name' => $this->string(255),
			'status' => $this->integer()->defaultValue('1'),
			'created_at' => $this->integer(),
			'updated_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('subscribe');
    }
}
