<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%governing_bodies}}`.
 */
class m190604_162211_create_governing_bodies_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%governing_bodies}}', [
            'id' => $this->primaryKey(),
            'text' => $this->text(),
        ]);

        $this->insert('governing_bodies', ['id' => 1]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%governing_bodies}}');
    }
}
