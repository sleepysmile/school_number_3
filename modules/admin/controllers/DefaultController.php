<?php

namespace app\modules\admin\controllers;

use app\models\User;
use yii\web\Controller;
use zxbodya\yii2\imageAttachment\ImageAttachmentAction;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
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

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionUserSettrings()
    {
        return $this->render('user-settings', [
            'model' => \Yii::$app->user->identity
        ]);
    }
}
