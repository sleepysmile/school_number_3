<?php


namespace app\controllers;


use app\models\AntiCorruption;
use yii\web\Controller;

class AntiCorruptionController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', ['model' => AntiCorruption::Res()]);
    }
}