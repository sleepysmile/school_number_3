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
        $oneNews = News::findOne(['slug' => $slug]);

        return $this->render('view', [
            'model' => $oneNews
        ]);
    }
}