<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * This is the model class for table "org_ep".
 *
 * @property int $id
 * @property string $text
 */
class OrgEp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'org_ep';
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

    public function getFiles()
    {
        $array = explode('\\', __CLASS__);
        return $this->hasMany(ImageManager::class, ['item_id' => 'id'])->andWhere(['class' => $array[count($array) - 1]]);
    }

    public function getFilesLinks()
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
