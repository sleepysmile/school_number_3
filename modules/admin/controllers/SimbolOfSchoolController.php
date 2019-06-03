<?php

namespace app\modules\admin\controllers;

use app\models\News;
use Yii;
use app\models\SimbolOfSchool;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use zxbodya\yii2\galleryManager\GalleryManagerAction;

/**
 * SimbolOfSchoolController implements the CRUD actions for SimbolOfSchool model.
 */
class SimbolOfSchoolController extends Controller
{
    public function actions()
    {
        return [
            'galleryApi' => [
                'class' => GalleryManagerAction::class,
                // mappings between type names and model classes (should be the same as in behaviour)
                'types' => [
                    'simbol' => SimbolOfSchool::class
                ]
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Updates an existing SimbolOfSchool model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['update', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SimbolOfSchool model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SimbolOfSchool model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SimbolOfSchool the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SimbolOfSchool::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
