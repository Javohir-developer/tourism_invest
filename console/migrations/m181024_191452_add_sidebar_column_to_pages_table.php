<?php

use yii\db\Migration;

/**
 * Handles adding sidebar to table `pages`.
 */
class m181024_191452_add_sidebar_column_to_pages_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('pages', 'sidebar', $this->integer(11)->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('pages', 'sidebar');
    }
}
