<?php

use yii\db\Migration;

/**
 * Handles adding type to table `{{%slider}}`.
 */
class m190214_073054_add_type_column_to_slider_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%slider}}', 'type_to', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%slider}}', 'type_to');
    }
}
