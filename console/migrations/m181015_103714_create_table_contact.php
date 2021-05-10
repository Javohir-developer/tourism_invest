<?php

use yii\db\Migration;

/**
 * Class m181015_103714_create_table_contact
 */
class m181015_103714_create_table_contact extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
    	$this->createTable('{{%contact}}', [
    		'id' => $this->primaryKey(),
			'type' => $this->string(255)->notNull(),
			'full_name' => $this->string(255)->notNull(),
			'phone' => $this->string(32)->notNull(),
			'email' => $this->string(255),
			'message' => $this->text()->notNull(),
			'status' => $this->integer()->defaultValue('0'),
			'created_at' => $this->integer(),
			'updated_at' => $this->integer(),
		]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contacts}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181015_103714_create_table_contact cannot be reverted.\n";

        return false;
    }
    */
}
