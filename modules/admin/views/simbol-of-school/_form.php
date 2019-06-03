<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use zxbodya\yii2\galleryManager\GalleryManager;

/* @var $this yii\web\View */
/* @var $model app\models\SimbolOfSchool */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="simbol-of-school-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php try {
        echo GalleryManager::widget(
            [
                'model' => $model,
                'behaviorName' => 'galleryBehavior',
                'apiRoute' => 'simbol-of-school/galleryApi'
            ]
        );
    } catch (Exception $e) {
    } ?>

    <?= $form->field($model, 'info')->widget(\yii\imperavi\Widget::class,
        [
            'plugins' => ['fullscreen', 'fontcolor', 'video'],
            'options' => [
                'minHeight' => 400,
                'maxHeight' => 400,
                'buttonSource' => true,
                'convertDivs' => false,
                'removeEmptyTags' => true,
            ],
        ])
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
