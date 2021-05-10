<?php

use yii\db\Migration;

/**
 * Handles adding category to table `post`.
 */
class m181015_080518_add_category_column_to_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('post', 'category', $this->string(255)->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('post', 'category');
    }
}
