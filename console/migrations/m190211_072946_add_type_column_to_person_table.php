<?php

use yii\db\Migration;

/**
 * Handles adding type to table `{{%person}}`.
 */
class m190211_072946_add_type_column_to_person_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%person}}', 'type', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%person}}', 'type');
    }
}
