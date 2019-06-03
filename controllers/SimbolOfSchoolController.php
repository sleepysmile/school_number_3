<?php


namespace app\controllers;


use app\models\SimbolOfSchool;
use yii\web\Controller;

class SimbolOfSchoolController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', ['model' => SimbolOfSchool::simbol()]);
    }
}