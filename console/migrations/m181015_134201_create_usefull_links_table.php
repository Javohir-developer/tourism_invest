<?php

use yii\db\Migration;

/**
 * Handles the creation of table `usefull_links`.
 */
class m181015_134201_create_usefull_links_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('usefull_links', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->null(),
            'image' => $this->string(255)->notNull(),
            'link' => $this->string(255),
            'status' => $this->integer(11),
            'order' => $this->integer(11),
            'lang' => $this->integer(11),
            'lang_hash' => $this->string(60),
            'created_at' => $this->integer()->null(),
            'updated_at' => $this->integer()->null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('usefull_links');
    }
}
