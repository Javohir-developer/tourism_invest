<?php

use yii\db\Migration;

/**
 * Handles the creation of table `group`.
 */
class m181016_044704_create_group_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('group', [
            'id' => $this->primaryKey(),
			'category' => $this->string()->notNull(),
			'person_id' => $this->integer(),
			'persons' => $this->string(255),
			'status' => $this->integer(),
			'created_at' => $this->integer()->notNull(),
			'updated_at' => $this->integer()->notNull(),
        ]);

        $this->createIndex(
          'index_group_person_id',
		  'group',
		  'person_id');

        $this->addForeignKey(
          'fk_person_id_person_id',
		  'group',
		  'person_id',
		  'person',
		  'id',
		  'CASCADE',
		  'CASCADE'
		);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    	$this->dropForeignKey('fk_person_id_person_id', 'group');
    	$this->dropIndex('index_group_person_id', 'group');
        $this->dropTable('governance');
    }
}
