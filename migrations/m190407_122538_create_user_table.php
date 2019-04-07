<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m190407_122538_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->comment('Имя пользователя'),
            'password' => $this->string()->comment('passwords user'),
            'email' => $this->string()->comment('E-mail users'),
            'status' => $this->integer()->comment('status users'),
            'password_reset_token' => $this->string()->unique(),
            'auth_key' => $this->string()->unique(),
            'created_at' => $this->string(),
            'updated_at' => $this->string(),
            'access_token' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
