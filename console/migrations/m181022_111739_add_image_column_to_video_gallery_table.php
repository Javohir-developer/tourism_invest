<?php

use yii\db\Migration;

/**
 * Handles adding image to table `video_gallery`.
 */
class m181022_111739_add_image_column_to_video_gallery_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('video_gallery', 'image', $this->string(255)->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('video_gallery', 'image');
    }
}
