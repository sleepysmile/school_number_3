<?php

namespace app\models;

use app\behaviors\DateTimeFormatBehavior;
use app\models\query\NewsQuery;
use usualdesigner\yii2\behavior\HitableBehavior;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;
use zxbodya\yii2\galleryManager\GalleryBehavior;

/**
 * This is the model class for table "{{%news}}".
 *
 * @property int $id
 * @property string $image_path
 * @property string $image_path_url
 * @property string $title
 * @property string $text
 * @property string $annotation
 * @property string $date
 * @property int $created_at
 * @property int $created_by
 * @property int $updated_at
 * @property int $updated_by
 * @property string $hit
 *
 * @property User $createdBy
 * @property User $updatedBy
 * @property string $slug [varchar(255)]
 * @property bool $publication [tinyint(1)]
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%news}}';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
            BlameableBehavior::class,
            'galleryBehavior' => [
                'class' => GalleryBehavior::class,
                'type' => 'product',
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
            'hit' => [
                'class' => HitableBehavior::class,
                'attribute' => 'hit',    //attribute which should contain uniquie hits value
                'group' => false,               //group name of the model (class name by default)
                'delay' => 60 * 60,             //register the same visitor every hour
                'table_name' => '{{%hits}}'     //table with hits data
            ],
            'slug' => [
                'class' => SluggableBehavior::class,
                'attribute' => 'title'
            ],
            [
            'class' => DateTimeFormatBehavior::class,
                'dateTime' => ['date'],
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
            [['date'], 'safe'],
            [['created_at', 'created_by', 'updated_at', 'updated_by', 'hit'], 'integer'],
            [['publication'], 'boolean'],
            [['hit'], 'default', 'value' => 0],
            [['title', 'annotation'], 'string', 'max' => 255],
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
            'gallery' => Yii::t('app', 'Галерея'),
            'title' => Yii::t('app', 'Заголовок'),
            'text' => Yii::t('app', 'Текст новости'),
            'annotation' => Yii::t('app', 'Аннотация'),
            'date' => Yii::t('app', 'Дата'),
            'publication' => Yii::t('app', 'Публикация'),
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

    /**
     * {@inheritdoc}
     * @return NewsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NewsQuery(get_called_class());
    }
}
