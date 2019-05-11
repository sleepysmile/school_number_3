<?php

namespace app\modules\admin\model;

use moonland\phpexcel\Excel;
use yii\web\UploadedFile;

class ImportForm extends \yii\base\Model
{
    /** @var UploadedFile */
    public $file;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [
                ['file'],
                'file',
                'skipOnEmpty' => false,
                'extensions' => 'xls, xlsx',
                'checkExtensionByMimeType' => false
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'file' => 'Файл',
        ];
    }

    /**
     * @return array|string
     */
    public function parse()
    {
        return Excel::import($this->file->tempName);
    }


}