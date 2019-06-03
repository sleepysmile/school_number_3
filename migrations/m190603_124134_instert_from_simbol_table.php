<?php

use yii\db\Migration;

/**
 * Class m190603_124134_instert_from_simbol_table
 */
class m190603_124134_instert_from_simbol_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('simbol_of_school', ['id' => 1]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

    }

}
