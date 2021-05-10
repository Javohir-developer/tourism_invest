<?php

use yii\db\Migration;

/**
 * Handles adding top to table `post`.
 */
class m181016_194750_add_top_column_to_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('post', 'top', $this->integer(11)->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('post', 'top');
        $this->dropColumn('post', 'null');
    }
}
