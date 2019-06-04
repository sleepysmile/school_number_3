<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%image_manager}}`.
 */
class m190603_162943_create_image_manager_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%image_manager}}', [
            'id' => $this->primaryKey(),
            'name' => $this->text()->notNull(),
            'class' => $this->text()->notNull(),
            'item_id' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%image_manager}}');
    }
}
