<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%gia}}`.
 */
class m190603_130608_create_gia_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%gia}}', [
            'id' => $this->primaryKey(),
            'text' => $this->text()
        ]);

        $this->insert('gia', ['id' => 1]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%gia}}');
    }
}
