<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "simbol_of_school".
 *
 * @property int $id
 * @property string $info
 */
class SimbolOfSchool extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'simbol_of_school';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['info'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'info' => 'Info',
        ];
    }
}
