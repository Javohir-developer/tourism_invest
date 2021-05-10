<?php

use yii\db\Migration;

class m180216_082406_create_table_categories extends Migration
{
    const TABLE_NAME = '{{%categories}}';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        $this->createTable(self::TABLE_NAME, [
            '[[id]]' =>'pk',
            '[[root]]' => $this->integer(),
            '[[lft]]' => $this->integer()->notNull(),
            '[[rgt]]' => $this->integer()->notNull(),
            '[[lvl]]' => $this->smallInteger(5)->notNull(),
            '[[active]]' => $this->boolean()->notNull()->defaultValue(true),
            '[[selected]]' => $this->boolean()->notNull()->defaultValue(false),
            '[[disabled]]' => $this->boolean()->notNull()->defaultValue(false),
            '[[readonly]]' => $this->boolean()->notNull()->defaultValue(false),
            '[[visible]]' => $this->boolean()->notNull()->defaultValue(true),
            '[[collapsed]]' => $this->boolean()->notNull()->defaultValue(false),
            '[[movable_u]]' => $this->boolean()->notNull()->defaultValue(true),
            '[[movable_d]]' => $this->boolean()->notNull()->defaultValue(true),
            '[[movable_l]]' => $this->boolean()->notNull()->defaultValue(true),
            '[[movable_r]]' => $this->boolean()->notNull()->defaultValue(true),
            '[[removable]]' => $this->boolean()->notNull()->defaultValue(true),
            '[[removable_all]]' => $this->boolean()->notNull()->defaultValue(false),
            '[[name]]' => $this->string(500)->notNull(),
            '[[icon]]' => $this->string(255),
            '[[icon_type]]' => $this->smallInteger(1)->notNull()->defaultValue(1),
            '[[description]]' => $this->text(),
            '[[slug]]'=>$this->string(500),
            '[[type]]' => $this->integer(255),
            '[[lang_hash]]' => $this->string(255),
            '[[lang]]' => $this->integer(255),
        ], $tableOptions);

        $this->createIndex('tree_NK1', self::TABLE_NAME, 'root');
        $this->createIndex('tree_NK2', self::TABLE_NAME, 'lft');
        $this->createIndex('tree_NK3', self::TABLE_NAME, 'rgt');
        $this->createIndex('tree_NK4', self::TABLE_NAME, 'lvl');
        $this->createIndex('tree_NK5', self::TABLE_NAME, 'active');

        $this->batchInsert('categories',
			['id', 'root', 'lft', 'rgt', 'lvl', 'active', 'selected', 'disabled', 'readonly', 'visible', 'collapsed', 'movable_u', 'movable_d', 'movable_l', 'movable_r', 'removable', 'removable_all', 'name', 'icon', 'icon_type', 'description', 'slug', 'type', 'lang_hash', 'lang'], [
                [1, 1, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Новости и объявлени-Портал', '', 1, '', 'news', 100, 'EnJWe8h6qxFx7mZTB4xJkDHYn6PRczNvugy1KuRdshl-FDa5DC', 2],
                [2, 2, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Оценка удовлетворительности пользователей ', '', 1, '', 'price', NULL, '06bwGMiQYwO8FHt0Eym4nU0gcMXgVfriqh_MLXOKssJluZ1mOR', 2],
                [3, 3, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Перечень документов', '', 1, '', 'files', NULL, 'WC9vTj2a1xrHqt08UbR7M6Yea19hQBGoRKtwe6ntRExoXx2YQF', 2],
                [4, 4, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Внимание', '', 1, '', 'attention', NULL, 'XQM6a3fBCipXM3H8VHdbx1YeQqJRWGBAhCPQ4P5JsVoNuiUTDr', 2],
                [5, 5, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Это полезно знать ', '', 1, '', 'useful', NULL, 'ltEw3YYxzp2fQDdvZ-BfwPPZgLkpSt2v0W7oh_G0bplZUroDF6', 2],
                [6, 6, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Тендеры и конкурсы центр', '', 1, '', 'tenders', 300, '6HcP9FURPSmuCm11UE8nbpN9ar6jwoD2n7bBSqbjJHO2MlyTlV', 2],
                [7, 7, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Школа УзАСБО центр', '', 1, '', 'school', 300, 'ZmlPbqU83DI2nD0L3ST-SVSGXyqzAWmka3Q_sA8oHQ3tnRuWKq', 2],
                [8, 8, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Госзакупки центр ', '', 1, '', 'government', 300, 'Acxwa4krslUbz581P9IIdMZKyrLxZr4Fmk8wEg7xl3xENe2L2h', 2],
                [9, 9, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Новости', '', 1, '', 'news_center', 300, 'LVRzUpu6mjm0V9WcIcYjdFfgly-7OIFR_4bqDWvtnDenblNY_r', 2],
                [10, 10, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Новости и объявлени-Портал', '', 1, '', 'news', 100, 'EnJWe8h6qxFx7mZTB4xJkDHYn6PRczNvugy1KuRdshl-FDa5DC', 1],
                [11, 11, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Оценка удовлетворительности пользователей ', '', 1, '', 'price', NULL, '06bwGMiQYwO8FHt0Eym4nU0gcMXgVfriqh_MLXOKssJluZ1mOR', 1],
                [12, 12, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Перечень документов', '', 1, '', 'files', NULL, 'WC9vTj2a1xrHqt08UbR7M6Yea19hQBGoRKtwe6ntRExoXx2YQF', 1],
                [13, 13, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Внимание', '', 1, '', 'attention', NULL, 'XQM6a3fBCipXM3H8VHdbx1YeQqJRWGBAhCPQ4P5JsVoNuiUTDr', 1],
                [14, 14, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Это полезно знать ', '', 1, '', 'useful', NULL, 'ltEw3YYxzp2fQDdvZ-BfwPPZgLkpSt2v0W7oh_G0bplZUroDF6', 1],
                [15, 15, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Тендеры и конкурсы центр', '', 1, '', 'tenders', 300, '6HcP9FURPSmuCm11UE8nbpN9ar6jwoD2n7bBSqbjJHO2MlyTlV', 1],
                [16, 16, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Школа УзАСБО центр', '', 1, '', 'school', 300, 'ZmlPbqU83DI2nD0L3ST-SVSGXyqzAWmka3Q_sA8oHQ3tnRuWKq', 1],
                [17, 17, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Госзакупки центр ', '', 1, '', 'government', 300, 'Acxwa4krslUbz581P9IIdMZKyrLxZr4Fmk8wEg7xl3xENe2L2h', 1],
                [18, 18, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Новости', '', 1, '', 'news_center', 300, 'LVRzUpu6mjm0V9WcIcYjdFfgly-7OIFR_4bqDWvtnDenblNY_r', 1],
                [19, 19, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Новости и объявлени-Портал', '', 1, '', 'news', 100, 'EnJWe8h6qxFx7mZTB4xJkDHYn6PRczNvugy1KuRdshl-FDa5DC', 3],
                [20, 20, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Оценка удовлетворительности пользователей ', '', 1, '', 'price', NULL, '06bwGMiQYwO8FHt0Eym4nU0gcMXgVfriqh_MLXOKssJluZ1mOR', 3],
                [21, 21, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Перечень документов', '', 1, '', 'files', NULL, 'WC9vTj2a1xrHqt08UbR7M6Yea19hQBGoRKtwe6ntRExoXx2YQF', 3],
                [22, 22, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Внимание', '', 1, '', 'attention', NULL, 'XQM6a3fBCipXM3H8VHdbx1YeQqJRWGBAhCPQ4P5JsVoNuiUTDr', 3],
                [23, 23, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Это полезно знать ', '', 1, '', 'useful', NULL, 'ltEw3YYxzp2fQDdvZ-BfwPPZgLkpSt2v0W7oh_G0bplZUroDF6', 3],
                [24, 24, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Тендеры и конкурсы центр', '', 1, '', 'tenders', 300, '6HcP9FURPSmuCm11UE8nbpN9ar6jwoD2n7bBSqbjJHO2MlyTlV', 3],
                [25, 25, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Школа УзАСБО центр', '', 1, '', 'school', 300, 'ZmlPbqU83DI2nD0L3ST-SVSGXyqzAWmka3Q_sA8oHQ3tnRuWKq', 3],
                [26, 26, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Госзакупки центр ', '', 1, '', 'government', 300, 'Acxwa4krslUbz581P9IIdMZKyrLxZr4Fmk8wEg7xl3xENe2L2h', 3],
                [27, 27, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Новости', '', 1, '', 'news_center', 300, 'LVRzUpu6mjm0V9WcIcYjdFfgly-7OIFR_4bqDWvtnDenblNY_r', 3],
                [28, 28, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Внутренний портал', '', 1, '', 'inbox', 300, 'LvRzUpu6mjm0V9WcIcYjdFfgly-7OIFR_4bqDWvtnDenblNY_r', 1],
                [29, 29, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Внутренний портал', '', 1, '', 'inbox', 300, 'LvRzUpu6mjm0V9WcIcYjdFfgly-7OIFR_4bqDWvtnDenblNY_r', 2],
                [30, 30, 1, 2, 0, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 'Внутренний портал', '', 1, '', 'inbox', 300, 'LvRzUpu6mjm0V9WcIcYjdFfgly-7OIFR_4bqDWvtnDenblNY_r', 3],
				]);

        /*
      * Создание индекса для создание отношение:
      * Языка - langs
      */
        $this->createIndex(
            'idx-categories-langs-lang',
            '{{%categories}}',
            '[[lang]]'
        );
        //Создание отношение
        $this->addForeignKey(
            'fk-categories-langs-lang',
            '{{%categories}}',
            '[[lang]]',
            '{{%langs}}',
            '[[lang_id]]',
            'CASCADE'
        );
    }


    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}



