<?php
/**
 * Created by PhpStorm.
 * User: Roman-PC
 * Date: 28.04.2019
 * Time: 18:47
 */

namespace app\controllers;


use yii\web\Controller;

class AboutController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}