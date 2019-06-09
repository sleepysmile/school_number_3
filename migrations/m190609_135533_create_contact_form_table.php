<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contact_form}}`.
 */
class m190609_135533_create_contact_form_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%contact_form}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'email' => $this->string(),
            'body' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contact_form}}');
    }
}
