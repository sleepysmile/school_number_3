<?php


namespace app\controllers;


use app\models\SelfExamination;
use yii\web\Controller;

class SelfExaminationController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', SelfExamination::Res());
    }
}