<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%org_ep}}`.
 */
class m190604_140146_create_org_ep_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%org_ep}}', [
            'id' => $this->primaryKey(),
            'text' => $this->text(),
        ]);

        $this->insert('org_ep', ['id' => 1]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%org_ep}}');
    }
}
