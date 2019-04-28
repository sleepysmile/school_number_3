<?php

use yii\db\Migration;

/**
 * Class m190428_131125_add_slug_to_teacher_table
 */
class m190428_131125_add_slug_to_teacher_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('teacher', 'slug', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropColumn('teacher', 'slug');
    }

}
