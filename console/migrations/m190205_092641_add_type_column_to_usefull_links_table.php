<?php

use yii\db\Migration;

/**
 * Handles adding type to table `{{%usefull_links}}`.
 */
class m190205_092641_add_type_column_to_usefull_links_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%usefull_links}}', 'type', $this->integer()->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%usefull_links}}', 'type');
    }
}
