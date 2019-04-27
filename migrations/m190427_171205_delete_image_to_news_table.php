<?php

use yii\db\Migration;

/**
 * Class m190427_171205_delete_image_to_news_table
 */
class m190427_171205_delete_image_to_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('news', 'image_path');
        $this->dropColumn('news', 'image_path_url');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('news', 'image_path', $this->string());
        $this->addColumn('news', 'image_path_url', $this->string());
    }

}
