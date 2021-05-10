<?php

use yii\db\Migration;

/**
 * Class m181109_100623_update_restr_table
 */
class m181109_100623_update_restr_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('restr', 'slug', $this->string(255));
        $this->addColumn('restr', 'status', $this->integer(11));
        $this->addColumn('restr', 'fax', $this->string(25));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181109_100623_update_restr_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181109_100623_update_restr_table cannot be reverted.\n";

        return false;
    }
    */
}
