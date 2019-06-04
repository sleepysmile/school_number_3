<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\UploadedFile;

/**
 * This is the model class for table "reception".
 *
 * @property int $id
 * @property string $file
 * @property string $text
 */
class Reception extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reception';
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

    public function getFiles()
    {
        return $this->hasMany(ImageManager::class, ['item_id' => 'id'])->andWhere(['class' => self::tableName()]);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'file' => 'File',
            'text' => 'Текст',
        ];
    }

    public function getFilesLinks() : array 
    {
        $array = [];

        foreach ($this->files as $item) {
            array_push($array, Html::img($item->fileUrl, ['class' => 'file-preview-image kv-preview-data']));;
        }
        return $array;
//        ArrayHelper::getColumn($this->files, 'fileUrl')
    }

    public function getFilesLinksData()
    {
        return ArrayHelper::toArray($this->files, [
            ImageManager::class => [
                'caption' => 'fileUrl',
                'key' => 'id'
            ]
        ]);
    }

    public static function Res()
    {
        return static::findOne(['id' => 1]);
    }
}
