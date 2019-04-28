<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tetcher_to_disciplines}}`.
 */
class m190428_125127_create_tetcher_to_disciplines_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tetcher_to_disciplines}}', [
            'id' => $this->primaryKey(),
            'id_teacher' => $this->integer(),
            'id_discipline' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tetcher_to_disciplines}}');
    }
}
