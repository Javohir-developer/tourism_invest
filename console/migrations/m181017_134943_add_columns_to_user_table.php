<?php

use yii\db\Migration;

/**
 * Class m181017_134943_add_columns_to_user_table
 */
class m181017_134943_add_columns_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
    	$this->addColumn('user', 'phone', $this->string(32));
    	$this->addColumn('user', 'company', $this->string(255));
    	$this->addColumn('user', 'position', $this->string(255));
    	$this->addColumn('user', 'region_id', $this->integer());
    	$this->addColumn('user', 'city_id', $this->integer());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
		$this->dropColumn('user', 'phone');
		$this->dropColumn('user', 'company');
		$this->dropColumn('user', 'position');
		$this->dropColumn('user', 'region_id');
		$this->dropColumn('user', 'city_id');
    }

}
