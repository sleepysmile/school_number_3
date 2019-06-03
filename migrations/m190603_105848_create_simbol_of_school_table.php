<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%simbol_of_school}}`.
 */
class m190603_105848_create_simbol_of_school_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%simbol_of_school}}', [
            'id' => $this->primaryKey(),
            'info' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%simbol_of_school}}');
    }
}
