<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "union".
 *
 * @property int $id
 * @property string $text
 */
class Union extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'union';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Текст',
        ];
    }

    public static function union()
    {
        return static::findOne(['id' => 1]);
    }

}
