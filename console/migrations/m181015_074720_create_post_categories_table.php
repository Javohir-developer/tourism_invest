<?php

use yii\db\Migration;

/**
 * Handles the creation of table `post_categories`.
 */
class m181015_074720_create_post_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('post_categories', [
            'post_id' => $this->integer(11)->null(),
            'category_id' => $this->integer(11)->null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('post_categories');
    }
}
