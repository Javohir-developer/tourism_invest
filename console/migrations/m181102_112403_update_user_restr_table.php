<?php

use yii\db\Migration;

/**
 * Class m181102_112403_update_user_restr_table
 */
class m181102_112403_update_user_restr_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'restr', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181102_112403_update_user_restr_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181102_112403_update_user_restr_table cannot be reverted.\n";

        return false;
    }
    */
}
