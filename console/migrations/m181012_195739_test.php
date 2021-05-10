<?php

use yii\db\Migration;

/**
 * Class m181012_194332_test
 */
class m181012_195739_test extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;

        if ($this->db->driverName === 'mysql')
        {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%test}}', [
            'id'           => $this->primaryKey(),
            'name'         => $this->string(255)->notNull(),
            'description'  => $this->string(300)->notNull(),
            'image'        => $this->string(),
            'hash'         => $this->string(60)->notNull(),
            'lang_id'      => $this->integer()->notNull(),
            'created_at'   => $this->integer()->notNull(),
            'updated_at'   => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%test}}');
    }
}
