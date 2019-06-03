<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Union */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="union-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'text')->widget(\yii\imperavi\Widget::class,
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
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
