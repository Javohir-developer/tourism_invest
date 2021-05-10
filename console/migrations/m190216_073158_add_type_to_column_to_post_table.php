<?php

use yii\db\Migration;

/**
 * Handles adding type_to to table `{{%post}}`.
 */
class m190216_073158_add_type_to_column_to_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%post}}', 'type_to', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%post}}', 'type_to');
    }
}
