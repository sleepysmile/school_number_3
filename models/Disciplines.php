<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii2tech\ar\softdelete\SoftDeleteBehavior;

/**
 * This is the model class for table "{{%disciplines}}".
 *
 * @property int $id
 * @property string $name
 * @property bool $isDeleted [tinyint(1)]
 */
class Disciplines extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%disciplines}}';
    }

    public function behaviors()
    {
        return [
            'softDeleteBehavior' => [
                'class' => SoftDeleteBehavior::class,
                'softDeleteAttributeValues' => [
                    'isDeleted' => true
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
            [['isDeleted'], 'boolean'],
            [['isDeleted'], 'default', 'value' => false],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
        ];
    }

    public static function names()
    {
        return ArrayHelper::map(static::find()->active()->all(), 'id', 'name');
    }

    public static function namesFromTeacher()
    {
        return ArrayHelper::map(static::find()->active()->all(), 'name', 'name');
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\DisciplinesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\DisciplinesQuery(get_called_class());
    }
}
