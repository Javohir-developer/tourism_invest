<?php

use yii\db\Migration;

/**
 * Handles adding description to table `{{%slider}}`.
 */
class m190207_102132_add_description_column_to_slider_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%slider}}', 'description', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%slider}}', 'description');
    }
}
