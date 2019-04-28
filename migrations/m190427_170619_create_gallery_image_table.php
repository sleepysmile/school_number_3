<?php

use yii\db\Migration;
use yii\db\mysql\Schema;

/**
 * Handles the creation of table `{{%gallery_image}}`.
 */
class m190427_170619_create_gallery_image_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%gallery_image}}', [
            'id' => $this->primaryKey(),
            'type' => Schema::TYPE_STRING,
            'ownerId' => Schema::TYPE_STRING . ' NOT NULL',
            'rank' => Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 0',
            'name' => Schema::TYPE_STRING,
            'description' => Schema::TYPE_TEXT
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%gallery_image}}');
    }
}
