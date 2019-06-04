<?php


namespace app\controllers;


use app\models\Reception;
use yii\web\Controller;

class ReceptionController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', ['model' => Reception::Res()]);
    }
}