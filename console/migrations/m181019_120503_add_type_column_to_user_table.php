<?php

use yii\db\Migration;

/**
 * Handles adding type to table `user`.
 */
class m181019_120503_add_type_column_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'type', $this->integer(11)->defaultValue(0));
        $this->update('user', ['type' => '1'], ['id' => '1']);
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user', 'type');
    }
}
