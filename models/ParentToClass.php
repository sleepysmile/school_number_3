<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parent_to_class".
 *
 * @property int $id
 * @property int $user_id
 * @property int $classes
 * @property string $letter
 */
class ParentToClass extends \yii\db\ActiveRecord
{
    public const CLASSES = [
        1 => 1,
        2 => 2,
        3 => 3,
        4 => 4,
        5 => 5,
        6 => 6,
        7 => 7,
        8 => 8,
        9 => 9,
        10 => 10,
        11 => 11,
    ];

    public const LETTER = [
        'А' => 'А',
        'Б' => 'Б',
        'В' => 'В',
        'Г' => 'Г',
    ];

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%parent_to_class}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'classes'], 'integer'],
            [['letter'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'classes' => 'Classes',
            'letter' => 'Letter',
        ];
    }
}
