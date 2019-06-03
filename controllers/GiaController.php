<?php


namespace app\controllers;


use app\models\Gia;
use yii\web\Controller;

class GiaController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', ['model' => Gia::gia()]);
    }
}