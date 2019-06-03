<?php

namespace app\models;

use app\behaviors\DateTimeFormatBehavior;
use app\models\query\ScheduleQuery;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%schedule}}".
 *
 * @property int $id
 * @property int $day
 * @property int $teacher
 * @property int $lesson
 * @property int $class
 * @property int $created_at
 * @property int $created_by
 * @property int $updated_at
 * @property int $updated_by
 *
 * @property User $createdBy
 * @property User $updatedBy
 * @property string $letter [varchar(255)]
 * @property int $number [int(11)]
 * @property string $date [date]
 */
class Schedule extends \yii\db\ActiveRecord
{
    public const DAY = [
        1 => 'Понедельник',
        2 => 'Вторник',
        3 => 'Среда',
        4 => 'Четверг',
        5 => 'Пятница',
        6 => 'Суббота',
    ];

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

    public const NUMBER = [
        1 => 1,
        2 => 2,
        3 => 3,
        4 => 4,
        5 => 5,
        6 => 6,
    ];

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%schedule}}';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
            BlameableBehavior::class,

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'created_by', 'updated_at', 'updated_by', 'number'], 'integer'],
            [['date'], 'safe'],
            [['day', 'teacher', 'lesson', 'class', 'letter'], 'string'],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['created_by' => 'id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['updated_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'day' => 'День недели',
            'teacher' => 'Учитель',
            'lesson' => 'Урок',
            'class' => 'Класс',
            'letter' => 'Буква',
            'number' => 'Номер урока',
            'date' => 'Дата урока'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::class, ['id' => 'created_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(User::class, ['id' => 'updated_by']);
    }

    public function getDay()
    {
        return static::DAY[$this->day];
    }

    public function getClass()
    {
        return static::CLASSES[$this->class] . static::LETTER[$this->letter];
    }

    public function getLesson()
    {
        return $this->number . ' урок';
    }

    /**
     * {@inheritdoc}
     * @return ScheduleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ScheduleQuery(get_called_class());
    }
}
