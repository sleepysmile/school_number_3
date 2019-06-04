<?php

namespace app\models;

use Yii;
use yii\helpers\Url;

/**
 * This is the model class for table "image_manager".
 *
 * @property int $id
 * @property string $name
 * @property string $class
 * @property int $item_id
 */
class ImageManager extends \yii\db\ActiveRecord
{
    public $file;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'image_manager';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'class', 'item_id'], 'required'],
            [['name', 'class'], 'string'],
            [['item_id'], 'integer'],
            [['file'], 'safe']
        ];
    }

    public function getFileUrl()
    {
        if ($this->name) {
            $path = str_replace('admin', '', Url::home(true) . 'file/' . $this->class . '/' . $this->name);
        }

        return $path ?: '';
    }

    public function getFileLink()
    {
        if ($this->name) {
            $path = str_replace('admin', '', '/file/' . $this->class . '/' . $this->name);
        }

        return $path ?: '';
    }
    
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'class' => 'Class',
            'item_id' => 'Item ID',
        ];
    }
}
