<?php

use yii\db\Migration;

/**
 * Class m190604_180833_delete_column_to_user_table
 */
class m190604_180833_delete_column_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('parent_to_class');
        $this->addColumn('user', 'classes', $this->string());
        $this->addColumn('user', 'letter', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->createTable('{{%parent_to_class}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'classes' => $this->integer(),
            'letter' => $this->string(),
        ]);
        $this->dropColumn('user', 'classes');
        $this->dropColumn('user', 'letter');
    }

}
