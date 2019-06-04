<?php

use yii\db\Migration;

/**
 * Class m190604_164409_delete_comunm_to_schendule_table
 */
class m190604_164409_delete_comunm_to_schendule_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('schedule', 'day');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

    }

}
