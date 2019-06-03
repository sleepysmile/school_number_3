<?php


namespace app\controllers;


use app\models\ElRes;
use yii\web\Controller;

class ElResController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', ['model' => ElRes::res()]);
    }
}