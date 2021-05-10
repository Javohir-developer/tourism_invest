<?php

use yii\db\Migration;

/**
 * Handles the creation of table `menu`.
 */
class m181016_065932_create_menu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%menu}}', [
            '[[menu_id]]' => $this->primaryKey(),
            '[[title]]' => $this->string(255),
            '[[alias]]' => $this->string(255),
            '[[type]]' => $this->integer(12),
            '[[lang_hash]]' => $this->string(255),
            '[[lang]]' => $this->integer(255),
        ]);

        $this->batchInsert('menu', ['menu_id', 'title', 'alias', 'type', 'lang_hash', 'lang'], [
            [1, 'Главное меню', 'header-menu', 0, 'cCaBlwLjlB6p6HK65w6Y_aIT1N3OAZJWtzQDEiVcW28PVHPijs', 3],
            [2, 'Asosiy menyu', 'header-menu', 0, 'cCaBlwLjlB6p6HK65w6Y_aIT1N3OAZJWtzQDEiVcW28PVHPijs', 1],
            [3, 'Асосий меню центр', 'header-menu', 0, 'cCaBlwLjlB6p6HK65w6Y_aIT1N3OAZJWtzQDEiVcW28PVHPijs', 2],
            [4, 'Футер меню центр', 'footer-menu', 0, '6rEdtedGABwRydy6g59XoPAdIaq87HeVMYq_IuwserpTD8Uv0k', 2],
            [5, 'Футер меню центр', 'footer-menu', 0, '6rEdtedGABwRydy6g59XoPAdIaq87HeVMYq_IuwserpTD8Uv0k', 1],
            [6, 'Футер меню центр', 'footer-menu', 0, '6rEdtedGABwRydy6g59XoPAdIaq87HeVMYq_IuwserpTD8Uv0k', 3],
            [7, 'Второе меню', 'second-menu', 0, 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCW75mSQg4dReFr', 2],
            [8, 'Второе меню', 'second-menu', 0, 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCW75mSQg4dReFr', 1],
            [9, 'Второе меню', 'second-menu', 0, 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCW75mSQg4dReFr', 3],
            [10, 'Главное меню Портал', 'header-menu-portal', 0, 'HwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCW75mSQg4dReFr', 3],
            [11, 'Главное меню Портал', 'header-menu-portal', 0, 'HwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCW75mSQg4dReFr', 2],
            [12, 'Главное меню Портал', 'header-menu-portal', 0, 'HwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCW75mSQg4dReFr', 1],
            [13, 'Футер меню Портал', 'footer-menu-portal', 0, 'HwBcafwwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCW75mSQg4dReFr', 1],
            [14, 'Футер меню Портал', 'footer-menu-portal', 0, 'HwBcafwwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCW75mSQg4dReFr', 2],
            [15, 'Футер меню Портал', 'footer-menu-portal', 0, 'HwBcafwwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCW75mSQg4dReFr', 3],
        ]);

        /*
        * Создание индекса для создание отношение:
        * Языка - langs
        */
        $this->createIndex(
            'idx-menu-langs-lang',
            '{{%menu}}',
            '[[lang]]'
        );
        //Создание отношение
        $this->addForeignKey(
            'fk-menu-langs-lang',
            '{{%menu}}',
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
        /*
         * Удаление связи:
         * Языка - langs
         */
        $this->dropForeignKey(
            'fk-menu-langs-lang',
            '{{%menu}}'
        );

        $this->dropIndex(
            'idx-menu-langs-lang',
            '{{%menu}}'
        );

        $this->dropTable('{{%menu}}');
    }
}