<?php

use yii\db\Migration;

/**
 * Class m190428_041110_add_column_to_enws_table
 */
class m190428_041110_add_column_to_enws_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('news', 'slug', $this->string());
        $this->addColumn('news', 'publication', $this->boolean()->defaultValue(false));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('news', 'slug');
        $this->dropColumn('news', 'publication');
    }

}
