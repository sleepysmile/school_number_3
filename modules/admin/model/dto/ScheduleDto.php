<?php


namespace app\modules\admin\model\dto;


use app\models\Schedule;
use yii\base\Model;

class ScheduleDto extends Model
{
    public $id;
    public $day;
    public $teacher;
    public $lesson;
    public $class;
    public $letter;
    public $number;
    public $date;

    public static function labels(): array
    {
        return [
            'ID', 'День', 'Учитель', 'Урок', 'Класс', 'Буква класса', 'Номер урока', 'Дата'
        ];
    }

    public static function loadFromExcel(array $data): array
    {
        $schedule = [];
        foreach ($data as $instructor) {
            $schedule[] = new self([
                'day' => (string)$instructor['День'],
                'teacher' => (string)$instructor['Учитель'],
                'lesson' => (string)$instructor['Урок'],
                'class' => (int)$instructor['Класс'],
                'letter' => (string)$instructor['Буква класса'],
                'number' => (int)$instructor['Номер урока'],
                'date' => (int)$instructor['Дата']
            ]);

            if (empty(Schedule::findOne(['teacher' => (string)$instructor['Учитель'], 'number' => (int)$instructor['Номер урока']]))) {
                $model = new Schedule([
                    'day' => (string)$instructor['День'],
                    'teacher' => (string)$instructor['Учитель'],
                    'lesson' => (string)$instructor['Урок'],
                    'class' => (string)$instructor['Класс'],
                    'letter' => (string)$instructor['Буква класса'],
                    'number' => (int)$instructor['Номер урока'],
                    'date' => (int)$instructor['Дата']
                ]);
                $model->save();
            }
        }


        return $schedule;
    }


}