<?php

namespace app\behaviors;

use yii\base\Behavior;
use yii\base\Event;
use yii\db\ActiveRecord;

class DateTimeFormatBehavior extends Behavior
{
    /** @var array Поля для приведения формата Даты */
    public $date = [];

    /** @var array Поля для приведения формата Даты и Времени */
    public $dateTime = [];

    /** @var array Поля для приведения формата Даты и Времени сокращенного h:s */
    public $dateTimeShort = [];

    /** @var array Перевод из даты со временем в дату */
    public $dateTime2Date = [];

    /** @var array Перевод из даты со временем во время H:i */
    public $dateTime2Time = [];

    public $timestamp2DateTime = [];

    /** @var string Выбранная дата для dateTime2Time */
    public $selectedDate;

    /**
     * @inheritdoc
     */
    public function events(): array
    {
        return [
            ActiveRecord::EVENT_AFTER_FIND => 'toLocal',
            ActiveRecord::EVENT_AFTER_REFRESH => 'toLocal',
            ActiveRecord::EVENT_AFTER_INSERT => 'toLocal',
            ActiveRecord::EVENT_AFTER_UPDATE => 'toLocal',
            ActiveRecord::EVENT_BEFORE_INSERT => 'toDb',
            ActiveRecord::EVENT_BEFORE_UPDATE => 'toDb',
        ];
    }

    /**
     * Конвертирует формат в указанный
     *
     * @param string $attribute Имя атрибута
     * @param string $fromFormat Входящий формат
     * @param string $toFormat Исходящий формат
     * @param string $raw Готовая строка даты вместо имени атрибута
     */
    public function convert($attribute, $fromFormat, $toFormat, $raw = ''): void
    {
        if (empty($this->owner->{$attribute})) {
            return;
        }

        $dateTime = $this->owner->{$attribute};
        if ('' !== $raw) {
            $dateTime = $raw;
        }

        $dt = \DateTime::createFromFormat($fromFormat, $dateTime);
        if ($dt !== false) {
            $this->owner->{$attribute} = $dt->format($toFormat);
        }
    }

    /**
     * Приводит поля модели к формату отображения
     *
     * @param Event $event
     */
    public function toLocal($event): void
    {
        foreach ($this->date as $attribute) {
            $this->convert($attribute, 'Y-m-d H:i:s', 'd.m.Y');
        }

        foreach ($this->dateTime2Date as $attribute) {
            $this->convert($attribute, 'Y-m-d H:i:s', 'd.m.Y');
        }

        foreach ($this->dateTime as $attribute) {
            $this->convert($attribute, 'Y-m-d H:i:s', 'd.m.Y H:i:s');
        }

        foreach ($this->dateTimeShort as $attribute) {
            $this->convert($attribute, 'Y-m-d H:i:s', 'd.m.Y H:i');
        }

        foreach ($this->dateTime2Time as $attribute) {
            $this->convert($attribute, 'Y-m-d H:i:s', 'H:i');
        }

        foreach ($this->timestamp2DateTime as $attribute) {
            $this->convert($attribute, 'Y-m-d H:i:s', 'U');
        }
    }

    /**
     * Приводит поля модели к формату БД
     *
     * @param Event $event
     */
    public function toDb($event): void
    {
        foreach ($this->date as $attribute) {
            $this->convert($attribute, 'd.m.Y', 'Y-m-d');
        }

        foreach ($this->dateTime2Date as $attribute) {
            $this->convert($attribute, 'd.m.Y', 'Y-m-d H:i:s');
        }

        foreach ($this->dateTime as $attribute) {
            $this->convert($attribute, 'd.m.Y H:i:s', 'Y-m-d H:i:s');
        }

        foreach ($this->dateTimeShort as $attribute) {
            $this->convert($attribute, 'd.m.Y H:i', 'Y-m-d H:i:00');
        }

        foreach ($this->dateTime2Time as $attribute) {
            $this->convert(
                $attribute,
                'd.m.Y H:i',
                'Y-m-d H:i:00',
                $this->owner->{$this->selectedDate} . ' ' . $this->owner->{$attribute}
            );
        }

        foreach ($this->timestamp2DateTime as $attribute) {
            $this->convert($attribute, 'U', 'Y-m-d H:i:s');
        }
    }

}