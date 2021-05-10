<?php

use yii\db\Migration;

/**
 * Handles the creation of table `documents`.
 */
class m181030_103808_create_documents_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('documents', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'slug' => $this->string(255)->notNull()->unique(),
            'intro' => $this->string(255),
            'content' => $this->text(),
            'image' => $this->string(),
            'lang_hash' => $this->string(60)->notNull(),
            'lang' => $this->integer()->notNull(),
            'view' => $this->integer()->defaultValue(0),
            'published_on' => $this->integer()->notNull(),
            'status' => $this->integer(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('documents');
    }
}
