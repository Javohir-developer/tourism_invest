<?php

use yii\db\Migration;

/**
 * Class m181013_130528_post
 */
class m181013_130528_post extends Migration
{
    public function up()
    {
        $tableOptions = null;

        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%post}}', [
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
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%post}}');
    }
}
