<?php

use yii\db\Migration;

/**
 * Handles the creation of table `city`.
 */
class m181019_045802_create_city_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('city', [
            'id' => $this->primaryKey(),
			'region_id' => $this->integer(),
			'name' => $this->string(),
			'lat' => $this->double(),
			'long' => $this->double(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('city');
    }
}
