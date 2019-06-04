<?php


namespace app\controllers;


use app\models\OrgEp;
use yii\web\Controller;

class OrgEpController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', ['model' => OrgEp::Res()]);
    }
}