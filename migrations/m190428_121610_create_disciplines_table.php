<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%disciplines}}`.
 */
class m190428_121610_create_disciplines_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%disciplines}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'isDeleted' => $this->boolean()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%disciplines}}');
    }
}
