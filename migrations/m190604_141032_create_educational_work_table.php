<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%educational_work}}`.
 */
class m190604_141032_create_educational_work_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%educational_work}}', [
            'id' => $this->primaryKey(),
            'text' => $this->text(),
        ]);

        $this->insert('educational_work', ['id' => 1]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%educational_work}}');
    }
}
