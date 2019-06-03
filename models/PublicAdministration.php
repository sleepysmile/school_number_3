<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "public_administration".
 *
 * @property int $id
 * @property string $text
 */
class PublicAdministration extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'public_administration';
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

    public static function PA()
    {
        return static::findOne(['id' => 1]);
    }
}
