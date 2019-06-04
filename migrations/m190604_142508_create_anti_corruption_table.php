<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%anti_corruption}}`.
 */
class m190604_142508_create_anti_corruption_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%anti_corruption}}', [
            'id' => $this->primaryKey(),
            'text' => $this->text(),
        ]);

        $this->insert('anti_corruption', ['id' => 1]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%anti_corruption}}');
    }
}
