<?php


namespace app\controllers;


use app\models\DeveProg;
use yii\web\Controller;

class DeveProgController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', ['model' => DeveProg::Res()]);
    }
}