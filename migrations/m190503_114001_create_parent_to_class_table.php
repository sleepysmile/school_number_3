<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%parent_to_class}}`.
 */
class m190503_114001_create_parent_to_class_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%parent_to_class}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'classes' => $this->integer(),
            'letter' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%parent_to_class}}');
    }
}
