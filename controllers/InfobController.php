<?php


namespace app\controllers;


use app\models\Infob;
use yii\web\Controller;

class InfobController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', ['model' => Infob::Res()]);
    }
}