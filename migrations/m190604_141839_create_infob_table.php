<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%infob}}`.
 */
class m190604_141839_create_infob_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%infob}}', [
            'id' => $this->primaryKey(),
            'text' => $this->text(),
        ]);

        $this->insert('infob', ['id' => 1]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%infob}}');
    }
}
