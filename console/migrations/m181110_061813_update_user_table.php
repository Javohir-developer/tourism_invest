<?php

use yii\db\Migration;

/**
 * Class m181110_061813_update_user_table
 */
class m181110_061813_update_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'image', $this->string(255));
        $this->addColumn('user', 'position_id', $this->string(255));
        $this->addColumn('user', 'description', $this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181110_061813_update_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181110_061813_update_user_table cannot be reverted.\n";

        return false;
    }
    */
}
