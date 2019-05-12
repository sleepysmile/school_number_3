<?php

use yii\db\Migration;

/**
 * Class m190512_113114_add_column_date_to_shendule_table
 */
class m190512_113114_add_column_date_to_shendule_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('schedule', 'date', $this->date());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('schedule', 'data');
    }

}
