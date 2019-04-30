<?php

use app\models\User;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%schedule}}`.
 */
class m190430_141628_create_schedule_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%schedule}}', [
            'id' => $this->primaryKey(),
            'day' => $this->integer(),
            'teacher' => $this->string(),
            'lesson' => $this->string(),
            'class' => $this->integer(),
            'created_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_at' => $this->integer(),
            'updated_by' => $this->integer(),
            'letter' => $this->string(),
        ]);

        $this->addForeignKey(
            'fk_schedule_to_updated_by',
            '{{%schedule}}',
            'updated_by',
            User::tableName(),
            'id'
        );

        $this->addForeignKey(
            'fk_schedule_to_created_by',
            '{{%schedule}}',
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
        $this->dropForeignKey('fk_schedule_to_created_by', '{{%schedule}}');
        $this->dropForeignKey('fk_schedule_to_updated_by', '{{%schedule}}');
        $this->dropTable('{{%schedule}}');
    }
}
