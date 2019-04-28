<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%hit}}`.
 */
class m190428_033436_create_hit_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%hits}}', [
            'hit_id' => $this->primaryKey(),
            'user_agent' => $this->string()->notNull(),
            'ip' => $this->string()->notNull(),
            'target_group' => $this->string()->notNull(),
            'target_pk' => $this->string()->notNull(),
            'created_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%hits}}');
    }
}
