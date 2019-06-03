<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%el_res}}`.
 */
class m190603_125034_create_el_res_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%el_res}}', [
            'id' => $this->primaryKey(),
            'text' => $this->text()
        ]);

        $this->insert('{{%el_res}}', ['id' => 1]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%el_res}}');
    }
}
