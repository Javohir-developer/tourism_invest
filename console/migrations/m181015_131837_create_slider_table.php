<?php

use yii\db\Migration;

/**
 * Handles the creation of table `slider`.
 */
class m181015_131837_create_slider_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('slider', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->null(),
            'image' => $this->string(255)->notNull(),
            'link' => $this->string(255),
            'status' => $this->integer(11),
            'type' => $this->integer(11),
            'order' => $this->integer(11),
            'lang' => $this->integer(11)->notNull(),
            'lang_hash' => $this->string(60)->notNull(),
            'created_at' => $this->integer()->null(),
            'updated_at' => $this->integer()->null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('slider');
    }
}
