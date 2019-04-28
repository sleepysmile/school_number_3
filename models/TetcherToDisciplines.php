<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tetcher_to_disciplines}}".
 *
 * @property int $id
 * @property int $id_teacher
 * @property int $id_discipline
 */
class TetcherToDisciplines extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tetcher_to_disciplines}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_teacher', 'id_discipline'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_teacher' => 'Id Teacher',
            'id_discipline' => 'Id Discipline',
        ];
    }
}
