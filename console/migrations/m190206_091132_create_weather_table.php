<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%weather}}`.
 */
class m190206_091132_create_weather_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%weather}}', [
            'id' => $this->primaryKey(),
            'weather' => $this->integer(),
            'time' => $this->integer(),
            'icon' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%weather}}');
    }
}
