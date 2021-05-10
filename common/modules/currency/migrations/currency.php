<?php

namespace common\modules\currency\migrations;

use yii\db\Migration;

class currency extends Migration
{
	public function safeUp()
	{
		$tableOptions = null;
		if ($this->db->driverName === 'mysql') {
			$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		}

		$this->createTable('{{%currency}}', [
			'id'    => $this->primaryKey(),
			'name'  => $this->string(),
			'diff'  => $this->float(),
			'value' => $this->float(),
			'date'  => $this->integer(),
		], $tableOptions);

	}

	public function safeDown()
	{
		$this->dropTable('{{%currency}}');
	}
}