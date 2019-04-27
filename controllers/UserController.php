<?php
/**
 * Created by PhpStorm.
 * User: Roman-PC
 * Date: 27.04.2019
 * Time: 20:31
 */

namespace app\controllers;


use app\models\User;
use yii\web\Controller;
use zxbodya\yii2\imageAttachment\ImageAttachmentAction;

class UserController extends Controller
{
    public function actions()
    {
        return [
            'imgAttachApi' => [
                'class' => ImageAttachmentAction::className(),
                // mappings between type names and model classes (should be the same as in behaviour)
                'types' => [
                    'user' => User::class
                ]
            ],
        ];
    }

    public function actionUserSettings()
    {
        return $this->render('user-settings', [
            'model' => \Yii::$app->user->identity
        ]);
    }
}