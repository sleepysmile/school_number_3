<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "el_res".
 *
 * @property int $id
 * @property string $text
 */
class ElRes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'el_res';
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

    public static function res()
    {
        return static::findOne(['id' => 1]);
    }
}
