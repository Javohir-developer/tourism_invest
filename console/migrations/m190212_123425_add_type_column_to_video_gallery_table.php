<?php

use yii\db\Migration;

/**
 * Handles adding type to table `{{%video_gallery}}`.
 */
class m190212_123425_add_type_column_to_video_gallery_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%video_gallery}}', 'type', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%video_gallery}}', 'type');
    }
}
