<?php


namespace app\controllers;


use app\models\GoverningBodies;
use yii\web\Controller;

class GoverningBodiesController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', ['model' => GoverningBodies::Res()]);
    }
}