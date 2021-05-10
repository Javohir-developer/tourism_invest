<?php

use yii\db\Migration;

/**
 * Handles the creation of table `restr`.
 */
class m181109_095124_create_restr_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('restr', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'image' => $this->string(255),
            'phone' => $this->string(25),
            'email' => $this->string(255),
            'yur_adress' => $this->string(255),
            'adress' => $this->string(255),
            'license' => $this->string(255),
            'experience' => $this->string(255),
            'additional_info' => $this->string(255),
            'lang_hash' => $this->string(60)->notNull(),
            'lang' => $this->integer()->notNull(),
            'user_id' => $this->integer(11),
        ]);

        $this->createIndex(
            'idx-restr-id',
            'restr',
            'id'
        );

        $this->addForeignKey(
            'fk-restr-user_id-user-id',
            'restr',
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
            'idx-restr-langs-lang',
            '{{%restr}}',
            '[[lang]]'
        );
        //Создание отношение
        $this->addForeignKey(
            'fk-restr-langs-lang',
            '{{%restr}}',
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
        $this->dropTable('restr');
    }
}
