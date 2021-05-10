<?php

use yii\db\Migration;

/**
 * Handles the creation of table `pages`.
 */
class m181015_095055_create_pages_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('pages', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'body' => $this->text(),
            'slug' => $this->string()->unique(),
            'copyright' => $this->string(),
            'view' => $this->integer()->defaultValue(0),
            'published_on' => $this->integer(),
            'status' => $this->integer(),
            'lang_hash' => $this->string(60)->notNull(),
            'lang' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('pages');
    }
}
