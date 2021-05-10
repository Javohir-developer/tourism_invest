<?php

use yii\db\Migration;

/**
 * Handles adding type to table `{{%person}}`.
 */
class m190214_073117_add_type_column_to_person_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%person}}', 'type_to', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%person}}', 'type_to');
    }
}
