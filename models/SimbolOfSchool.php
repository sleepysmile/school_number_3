<?php

namespace app\models;

use app\behaviors\DateTimeFormatBehavior;
use usualdesigner\yii2\behavior\HitableBehavior;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;
use zxbodya\yii2\galleryManager\GalleryBehavior;

/**
 * This is the model class for table "simbol_of_school".
 *
 * @property int $id
 * @property string $info
 */
class SimbolOfSchool extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            'galleryBehavior' => [
                'class' => GalleryBehavior::class,
                'type' => 'simbol',
                'extension' => 'jpg',
                'directory' => Yii::getAlias('@webroot') . '/images/product/gallery',
                'url' => Yii::getAlias('@web') . '/images/product/gallery',
                'versions' => [
                    'small' => function ($img) {
                        /** @var \Imagine\Image\ImageInterface $img */
                        return $img
                            ->copy()
                            ->thumbnail(new \Imagine\Image\Box(200, 200));
                    },
                    'medium' => function ($img) {
                        /** @var \Imagine\Image\ImageInterface $img */
                        $dstSize = $img->getSize();
                        $maxWidth = 800;
                        if ($dstSize->getWidth() > $maxWidth) {
                            $dstSize = $dstSize->widen($maxWidth);
                        }
                        return $img
                            ->copy()
                            ->resize($dstSize);
                    },
                ]
            ],

        ];
    }

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
            'info' => 'Дополнительная информация',
        ];
    }

    public static function simbol()
    {
        return static::findOne(['id' => 1]);
    }
}
