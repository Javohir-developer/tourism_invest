<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users`.
 * Таблица пользавателей в системе
 */
class m180216_083742_create_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%users}}', [
            '[[user_id]]' => $this->primaryKey()->unique(),
            '[[login]]' => $this->string(255)->notNull()->unique(),
            '[[password_hash]]' => $this->string(255)->notNull(),
            '[[email]]' => $this->string(255)->notNull()->unique(),
            '[[phone]]' => $this->string(15)->unique(),
            '[[user_status]]' => $this->integer(15)->defaultValue(1),
			'auth_key' => $this->string(32),
			'password_reset_token' => $this->string()->unique(),
			'created_at' => $this->integer(),
			'updated_at' => $this->integer(),

        ]);
		$this->addColumn('users', 'company', $this->string(255));
		$this->addColumn('users', 'position', $this->string(255));
		$this->addColumn('users', 'region_id', $this->integer());
		$this->addColumn('users', 'city_id', $this->integer());
		$this->addColumn('users', 'type', $this->integer()->defaultValue(0));

		$this->insert('{{%users}}', array(
			'login' => 'admin',
			'password_hash' => Yii::$app->security->generatePasswordHash('123456'),
			'auth_key'  => Yii::$app->security->generateRandomString(),
			'email' => 'admin@agrofin.uz'
		));
	}

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
    }
}
