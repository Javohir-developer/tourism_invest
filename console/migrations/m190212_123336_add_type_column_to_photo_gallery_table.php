<?php

use yii\db\Migration;

/**
 * Handles adding type to table `{{%photo_gallery}}`.
 */
class m190212_123336_add_type_column_to_photo_gallery_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%photo_gallery}}', 'type', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%photo_gallery}}', 'type');
    }
}
