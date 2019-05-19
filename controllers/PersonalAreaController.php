<?php

namespace app\controllers;

use app\models\Schedule;
use yii\db\Expression;
use yii\web\Controller;

class PersonalAreaController extends Controller
{
    public function actionIndex()
    {
        if (\Yii::$app->user->can('teacher')) {

            $today = Schedule::find()
                ->where(new Expression('DATE_FORMAT(date, "%Y %d %M") = DATE_FORMAT(NOW(), "%Y %d %M")'))
                ->andWhere(['teacher' => \Yii::$app->user->identity->username])
                ->all();
            $tomorrow = Schedule::find()
                ->where(['date' => date("Y-m-d", strtotime("+1 day"))])
                ->andWhere(['teacher' => \Yii::$app->user->identity->username])
                ->all();
            $aftertomorrow = Schedule::find()
                ->where(['date' => date("Y-m-d", strtotime("+2 day"))])
                ->andWhere(['teacher' => \Yii::$app->user->identity->username])
                ->all();
        }

        if (\Yii::$app->user->can('parent')) {
            $today = Schedule::find()
                ->where(new Expression('DATE_FORMAT(date, "%Y %d %M") = DATE_FORMAT(NOW(), "%Y %d %M")'))
                ->andWhere(['class' => \Yii::$app->user->identity->classes->classes, 'letter' => \Yii::$app->user->identity->classes->letter])
                ->all();
            $tomorrow = Schedule::find()
                ->where(['date' => date("Y-m-d", strtotime("+1 day"))])
                ->andWhere(['class' => \Yii::$app->user->identity->classes->classes, 'letter' => \Yii::$app->user->identity->classes->letter])
                ->all();
            $aftertomorrow = Schedule::find()
                ->where(['date' => date("Y-m-d", strtotime("+2 day"))])
                ->andWhere(['class' => \Yii::$app->user->identity->classes->classes, 'letter' => \Yii::$app->user->identity->classes->letter])
                ->all();
        }


        return $this->render('index', [
            'today' => $today,
            'tomorrow' => $tomorrow,
            'aftertomorrow' => $aftertomorrow,
        ]);
    }

    public function actionAll()
    {
        if (!\Yii::$app->user->can('parent')) {
            $shendule = Schedule::find()
                ->andWhere(['teacher' => \Yii::$app->user->identity->username])
                ->orderBy('date DESC')
                ->all();
        } else {
            $shendule = Schedule::find()
                ->andWhere(['class' => \Yii::$app->user->identity->classes->classes, 'letter' => \Yii::$app->user->identity->classes->letter])
                ->orderBy('date DESC')
                ->all();
        }

        return $this->render('all-schendule', ['schedule' => $shendule]);
    }
}