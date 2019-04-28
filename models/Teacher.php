<?php

namespace app\models;

use Yii;
use yii\behaviors\SluggableBehavior;
use zxbodya\yii2\imageAttachment\ImageAttachmentBehavior;

/**
 * This is the model class for table "{{%teacher}}".
 *
 * @property int $id
 * @property string $name
 * @property string $info
 * @property string $education
 * @property int $disciplines
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%teacher}}';
    }

    public function behaviors()
    {
        return [
            'coverBehavior' => [
                'class' => ImageAttachmentBehavior::class,
                // type name for model
                'type' => 'teacher',
                // image dimmentions for preview in widget
                'previewHeight' => 200,
                'previewWidth' => 300,
                // extension for images saving
                'extension' => 'jpg',
                // path to location where to save images
                'directory' => Yii::getAlias('@webroot') . '/images/teacher/cover',
                'url' => Yii::getAlias('@web') . '/images/teacher/cover',
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
            [
                'class' => \voskobovich\behaviors\ManyToManyBehavior::className(),
                'relations' => [
                    'allDisciplines' => 'disciplines'
                ],
            ],
            'slug' => [
                'class' => SluggableBehavior::class,
                'attribute' => 'name'
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['info', 'education'], 'string'],
            [['allDisciplines'], 'each', 'rule' => ['integer']],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Ф.И.О',
            'info' => 'Информация',
            'education' => 'Образование',
            'allDisciplines' => 'Дисциплины',
        ];
    }

    public function getDisciplines()
    {
        return $this->hasMany(Disciplines::class, ['id' => 'id_discipline'])
                    ->viaTable(TetcherToDisciplines::tableName(), ['id_teacher' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\TeacherQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\TeacherQuery(get_called_class());
    }
}
