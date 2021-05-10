<?php

use yii\db\Migration;

/**
 * Handles adding files to table `pages`.
 */
class m181022_225237_add_files_column_to_pages_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('pages', 'files', $this->string(255)->null());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('pages', 'files');
    }
}
