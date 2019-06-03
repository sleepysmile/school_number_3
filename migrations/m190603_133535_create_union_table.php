<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%union}}`.
 */
class m190603_133535_create_union_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%union}}', [
            'id' => $this->primaryKey(),
            'text' => $this->text()
        ]);

        $this->insert('{{%union}}', ['id' => 1]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%union}}');
    }
}
