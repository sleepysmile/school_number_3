<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use zxbodya\yii2\imageAttachment\ImageAttachmentBehavior;

/**
 * This is the model class for table "governing_bodies".
 *
 * @property int $id
 * @property string $text
 */
class GoverningBodies extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'governing_bodies';
    }

    public function behaviors()
    {
        return [
            'coverBehavior' => [
                'class' => ImageAttachmentBehavior::class,
                // type name for model
                'type' => 'Gover',
                // image dimmentions for preview in widget
                'previewHeight' => 200,
                'previewWidth' => 300,
                // extension for images saving
                'extension' => 'jpg',
                // path to location where to save images
                'directory' => Yii::getAlias('@webroot') . '/images/Gover/cover',
                'url' => Yii::getAlias('@web') . '/images/Gover/cover',
                // additional image versions
                'versions' => [
                    'small' => function ($img) {
                        /** @var ImageInterface $img */
                        return $img
                            ->copy()
                            ->resize($img->getSize()->widen(200));
                    },
                    'medium' => function ($img) {
                        /** @var ImageInterface $img */
                        $dstSize = $img->getSize();
                        $maxWidth = 800;
                        if ($dstSize->getWidth() > $maxWidth) {
                            $dstSize = $dstSize->widen($maxWidth);
                        }
                        return [
                            $img->copy()->resize($dstSize),
                            ['jpeg_quality' => 80], // options used when saving image (Imagine::save)
                        ];
                    },
                ]
            ],
        ];
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
            'text' => 'текст',
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
