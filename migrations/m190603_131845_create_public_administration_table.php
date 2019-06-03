<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%public_administration}}`.
 */
class m190603_131845_create_public_administration_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%public_administration}}', [
            'id' => $this->primaryKey(),
            'text' => $this->text(),
        ]);

        $this->insert('public_administration', ['id' => 1]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%public_administration}}');
    }
}
