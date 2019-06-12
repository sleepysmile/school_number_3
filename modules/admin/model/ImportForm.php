<?php

namespace app\modules\admin\model;

use app\models\Schedule;
use moonland\phpexcel\Excel;
use PHPExcel_IOFactory;
use PHPExcel_Shared_Date;
use yii\helpers\ArrayHelper;
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
     * @throws \PHPExcel_Reader_Exception
     * @throws \PHPExcel_Exception
     */
    public function import()
    {
        $objPHPExcel = \PHPExcel_IOFactory::load($this->file->tempName);

        $Start = 1;
        $active = $objPHPExcel->getActiveSheet();
        for ($i= $Start; $i <= 1000; $i++)
        {
            $Row = new Schedule();

            if ($active->getCell('A'.$i )->getValue() !== null) {
                $Row->teacher = (string)$active->getCell('A'.$i )->getValue();
                $Row->lesson = (string)$active->getCell('B'.$i )->getValue();
                $Row->class = (string)$active->getCell('C'.$i )->getValue();
                $Row->letter = (string)$active->getCell('D'.$i )->getValue();
                $Row->number = (string)$active->getCell('E'.$i )->getValue();
                $Row->date = (string)$active->getCell('F'.$i )->getValue();

                $Row->save();
            }
        }

        return true;
    }


}