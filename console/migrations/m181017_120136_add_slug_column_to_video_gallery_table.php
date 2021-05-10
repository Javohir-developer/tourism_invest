<?php

use yii\db\Migration;

/**
 * Handles adding slug to table `video_gallery`.
 */
class m181017_120136_add_slug_column_to_video_gallery_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('video_gallery', 'slug', $this->string(255)->unique()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('video_gallery', 'slug');
    }
}
