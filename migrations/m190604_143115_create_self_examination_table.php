<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%self_examination}}`.
 */
class m190604_143115_create_self_examination_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%self_examination}}', [
            'id' => $this->primaryKey(),
            'text' => $this->text(),
        ]);

        $this->insert('self_examination', ['id' => 1]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%self_examination}}');
    }
}
