<?php

use yii\db\Migration;

/**
 * Handles adding image to table `person`.
 */
class m181022_221045_add_image_column_to_person_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
    	$this->addColumn('person', 'image', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    	$this->dropColumn('person', 'image');
    }
}
