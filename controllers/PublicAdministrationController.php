<?php


namespace app\controllers;


use app\models\PublicAdministration;
use yii\web\Controller;

class PublicAdministrationController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', ['model' => PublicAdministration::PA()]);
    }
}