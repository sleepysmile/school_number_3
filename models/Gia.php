<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gia".
 *
 * @property int $id
 * @property string $text
 */
class Gia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gia';
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

    public static function gia()
    {
        return static::findOne(['id' => 1]);
    }
}
