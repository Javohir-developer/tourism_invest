<?php

use yii\db\Migration;

/**
 * Handles the creation of table `person`.
 */
class m181015_132559_create_person_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('person', [
            'id' => $this->primaryKey(),
			'fullName' => $this->string(255),
			'phone' => $this->string(32),
			'fax' => $this->string(32),
			'email' => $this->string(255),
			'bio' => $this->text(),
			'duties' => $this->text(),
			'reception' => $this->string(255),
			'link_blog' => $this->string(255),
			'link_forum' => $this->string(255),
			'region_id' => $this->integer(),
			'sort' => $this->integer(),
			'position' => $this->string(255),
			'status' => $this->integer(),
			'created_at' => $this->integer(),
			'updated_at' => $this->integer(),
			'lang' => $this->integer(),
			'lang_hash' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('person');
    }
}
