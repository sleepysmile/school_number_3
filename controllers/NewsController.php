<?php
/**
 * Created by PhpStorm.
 * User: Roman-PC
 * Date: 28.04.2019
 * Time: 7:10
 */

namespace app\controllers;


use app\models\News;
use yii\web\Controller;

class NewsController extends Controller
{
    public function actionView(string $slug)
    {
        $oneNews = News::find()->publication()->where(['slug' => $slug])->one();

        return $this->render('view', [
            'model' => $oneNews
        ]);
    }
}