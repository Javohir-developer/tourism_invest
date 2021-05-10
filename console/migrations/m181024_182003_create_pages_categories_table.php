<?php

use yii\db\Migration;

/**
 * Handles the creation of table `pages_categories`.
 */
class m181024_182003_create_pages_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('pages_categories', [
            'pages_id' => $this->integer(11)->null(),
            'category_id' => $this->integer(11)->null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('pages_categories');
    }
}
