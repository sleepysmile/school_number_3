<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%deve_prog}}`.
 */
class m190604_131039_create_deve_prog_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%deve_prog}}', [
            'id' => $this->primaryKey(),
            'text' => $this->text(),
        ]);

        $this->insert('deve_prog', ['id' => 1]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%deve_prog}}');
    }
}
