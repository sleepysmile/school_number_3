<?php
/**
 * Created by PhpStorm.
 * User: Roman-PC
 * Date: 28.04.2019
 * Time: 16:07
 */

namespace app\controllers;


use app\models\Teacher;
use yii\web\Controller;

class TeacherController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', [
            'teachers' => Teacher::find()->all()
        ]);
    }

    public function actionView(string $slug)
    {
        return $this->render('view', [
            'teacher' => Teacher::findOne(['slug' => $slug])
        ]);
    }

}