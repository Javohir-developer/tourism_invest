<?php

use yii\db\Migration;

/**
 * Handles the creation of table `position`.
 */
class m181110_061943_create_position_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('position', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'user_id' => $this->integer(11),
            'lang_hash' => $this->string(60)->notNull(),
            'lang' => $this->integer()->notNull(),
        ]);

        $this->createIndex(
            'idx-position-id',
            'position',
            'id'
        );

        $this->addForeignKey(
            'fk-position-user_id-user-id',
            'position',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        /*
 * Создание индекса для создание отношение:
 * Языка - langs
 */
        $this->createIndex(
            'idx-position-langs-lang',
            '{{%position}}',
            '[[lang]]'
        );
        //Создание отношение
        $this->addForeignKey(
            'fk-position-langs-lang',
            '{{%position}}',
            '[[lang]]',
            '{{%langs}}',
            '[[lang_id]]',
            'CASCADE'
        );
    }



    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('position');
    }
}
