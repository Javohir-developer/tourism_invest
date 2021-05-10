<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%region_courses}}`.
 */
class m190208_064125_create_region_courses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%region_courses}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->string(),
            'link' => $this->string(),
            'image' => $this->string(),
            'slug' => $this->string(),
            'lang_hash' => $this->string(),
            'lang' => $this->integer()
        ]);

        $this->batchInsert('region_courses', ['id', 'title', 'description', 'link', 'image', 'slug', 'lang_hash', 'lang'], [
            [1, 'РЕСПУБЛИКА КОРАКАЛПАКИСТАН', 'В 2017 году в Республике Каракалпакстан повысят квалификацию 150 сотрудников финансово-учетныхподразделений бюджетныхорганизаций. В том числе учреждений Высшего и среднего специального образования ', '/', ',10', '1', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCW75mSQg4dReFF', '2'],
            [2, 'Хоразм', '', '', '', '2', 'hwBcafuwkhZ5nyK3QsoSvbVLRQzT6UoZ9ZtMCW75mSQg4dReFr', '2'],
            [3, 'Навоий', '', '', '', '3', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReFr', '2'],
            [4, 'Бухоро', '', '', '', '4', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReFc', '2'],
            [5, 'Самарканд', '', '', '', '5', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReF2', '2'],
            [6, 'Жиззах', '', '', '', '6', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReF4', '2'],
            [7, 'Сирдарё', '', '', '', '7', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReF5', '2'],
            [8, 'Тошкент', '', '', '', '8', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReF6', '2'],
            [9, 'Фаргона', '', '', '', '9', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReF7', '2'],
            [10, 'Наманган', '', '', '', '10', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReF8', '2'],
            [11, 'Андижон', '', '', '', '11', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReF9', '2'],
            [12, 'Кашкадарьё', '', '', '', '12', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReqq', '2'],
            [13, 'Сурхондарё', '', '', '', '13', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReas', '2'],
            [14, 'РЕСПУБЛИКА КОРАКАЛПАКИСТАН', 'В 2017 году в Республике Каракалпакстан повысят квалификацию 150 сотрудников финансово-учетныхподразделений бюджетныхорганизаций. В том числе учреждений Высшего и среднего специального образования ', '/', ',10', '1', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCW75mSQg4dReFF', '1'],
            [15, 'Хоразм', '', '', '', '2', 'hwBcafuwkhZ5nyK3QsoSvbVLRQzT6UoZ9ZtMCW75mSQg4dReFr', '1'],
            [16, 'Навоий', '', '', '', '3', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReFr', '1'],
            [17, 'Бухоро', '', '', '', '4', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReFc', '1'],
            [18, 'Самарканд', '', '', '', '5', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReF2', '1'],
            [19, 'Жиззах', '', '', '', '6', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReF4', '1'],
            [20, 'Сирдарё', '', '', '', '7', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReF5', '1'],
            [21, 'Тошкент', '', '', '', '8', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReF6', '1'],
            [22, 'Фаргона', '', '', '', '9', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReF7', '1'],
            [23, 'Наманган', '', '', '', '10', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReF8', '1'],
            [24, 'Андижон', '', '', '', '11', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReF9', '1'],
            [25, 'Кашкадарьё', '', '', '', '12', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReqq', '1'],
            [26, 'Сурхондарё', '', '', '', '13', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReas', '1'],
            [27, 'РЕСПУБЛИКА КОРАКАЛПАКИСТАН', 'В 2017 году в Республике Каракалпакстан повысят квалификацию 150 сотрудников финансово-учетныхподразделений бюджетныхорганизаций. В том числе учреждений Высшего и среднего специального образования ', '/', ',10', '1', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCW75mSQg4dReFF', '3'],
            [28, 'Хоразм', '', '', '', '2', 'hwBcafuwkhZ5nyK3QsoSvbVLRQzT6UoZ9ZtMCW75mSQg4dReFr', '3'],
            [29, 'Навоий', '', '', '', '3', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReFr', '3'],
            [30, 'Бухоро', '', '', '', '4', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReFc', '3'],
            [31, 'Самарканд', '', '', '', '5', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReF2', '3'],
            [32, 'Жиззах', '', '', '', '6', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReF4', '3'],
            [33, 'Сирдарё', '', '', '', '7', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReF5', '3'],
            [34, 'Тошкент', '', '', '', '8', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReF6', '3'],
            [35, 'Фаргона', '', '', '', '9', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReF7', '3'],
            [36, 'Наманган', '', '', '', '10', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReF8', '3'],
            [37, 'Андижон', '', '', '', '11', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReF9', '3'],
            [38, 'Кашкадарьё', '', '', '', '12', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReqq', '3'],
            [39, 'Сурхондарё', '', '', '', '13', 'hwBcafuwkhZ5nyK3QsoSvbvLRQzT6UoZ9ZtMCWs5mSQg4dReas', '3'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%region_courses}}');
    }
}