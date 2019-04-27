<?php

use app\models\User;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m190421_173131_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'image_path' => $this->string(),
            'image_path_url' => $this->string(),
            'title' => $this->string(),
            'text' => $this->text(),
            'annotation' => $this->string(),
            'date' => $this->dateTime(),
            'created_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_at' => $this->integer(),
            'updated_by' => $this->integer(),
            'hit' => $this->bigInteger(),
        ]);

        $this->addForeignKey(
            'fk_news_to_updated_by',
            '{{%news}}',
            'updated_by',
            User::tableName(),
            'id'
        );

        $this->addForeignKey(
            'fk_news_to_created_by',
            '{{%news}}',
            'created_by',
            User::tableName(),
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_news_to_created_by', '{{%news}}');
        $this->dropForeignKey('fk_news_to_updated_by', '{{%news}}');
        $this->dropTable('{{%news}}');
    }
}
