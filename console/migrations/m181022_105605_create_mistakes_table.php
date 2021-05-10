<?php

use yii\db\Migration;

/**
 * Handles the creation of table `mistakes`.
 */
class m181022_105605_create_mistakes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('mistakes', [
            'id' => $this->primaryKey(),
			'route' => $this->string(255),
			'mistake' => $this->string(255),
			'comment' => $this->string(255),
			'status' => $this->integer()->defaultValue(0),
			'created_at' => $this->integer(),
			'updated_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('mistakes');
    }
}
