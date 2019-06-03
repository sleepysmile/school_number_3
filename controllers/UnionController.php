<?php


namespace app\controllers;


use app\models\Union;
use yii\web\Controller;

class UnionController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', ['model' => Union::union()]);
    }
}