<?php

use yii\db\Migration;

/**
 * Class m181024_152159_add_column_to_pages_table
 */
class m181024_152159_add_column_to_pages_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('pages', 'category_id', $this->string(255)->null());
        $this->addColumn('pages', 'anons', $this->string(255)->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('pages', 'category_id');
        $this->dropColumn('pages', 'anons');
    }
}
