<?php

use yii\db\Migration;

/**
 * Class m190502_124615_add_number_to_schedule_table
 */
class m190502_124615_add_number_to_schedule_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('schedule', 'number', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('schedule', 'number');
    }

}
