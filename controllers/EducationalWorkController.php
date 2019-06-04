<?php


namespace app\controllers;


use app\models\EducationalWork;
use yii\web\Controller;

class EducationalWorkController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index',['model' => EducationalWork::Res()]);
    }
}