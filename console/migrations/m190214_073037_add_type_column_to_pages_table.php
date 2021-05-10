<?php

use yii\db\Migration;

/**
 * Handles adding type to table `{{%pages}}`.
 */
class m190214_073037_add_type_column_to_pages_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%pages}}', 'type', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%pages}}', 'type');
    }
}
