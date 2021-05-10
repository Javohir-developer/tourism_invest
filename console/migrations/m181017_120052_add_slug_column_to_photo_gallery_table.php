<?php

use yii\db\Migration;

/**
 * Handles adding slug to table `photo_gallery`.
 */
class m181017_120052_add_slug_column_to_photo_gallery_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('photo_gallery', 'slug', $this->string(255)->unique()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('photo_gallery', 'slug');
    }
}
