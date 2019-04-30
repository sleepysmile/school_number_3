<?php

use yii\db\Migration;

/**
 * Class m190430_055727_add_admin_to_user_table
 */
class m190430_055727_add_admin_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('user', ['id' => 1 ,'username' => 'admin', 'password' => '123456']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

    }

}
