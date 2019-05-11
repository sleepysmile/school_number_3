<?php

namespace app\controllers;

use app\models\Schedule;
use yii\web\Controller;

class PersonalAreaController extends Controller
{
    public function actionIndex()
    {
        $monday = Schedule::find()->where(['teacher' => \Yii::$app->user->identity->username, 'day' => 1])->all();
        $tuesday = Schedule::find()->where(['teacher' => \Yii::$app->user->identity->username, 'day' => 2])->all();
        $wednesday = Schedule::find()->where(['teacher' => \Yii::$app->user->identity->username, 'day' => 3])->all();
        $thursday = Schedule::find()->where(['teacher' => \Yii::$app->user->identity->username, 'day' => 4])->all();
        $friday = Schedule::find()->where(['teacher' => \Yii::$app->user->identity->username, 'day' => 5])->all();
        $saturday = Schedule::find()->where(['teacher' => \Yii::$app->user->identity->username, 'day' => 6])->all();

        return $this->render('index', [
            'monday' => $monday,
            'tuesday' => $tuesday,
            'wednesday' => $wednesday,
            'thursday' => $thursday,
            'friday' => $friday,
            'saturday' => $saturday,
        ]);
    }
}