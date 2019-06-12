<?php

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Schedule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schedule-form">

    <?php if( Yii::$app->session->hasFlash('alert') ): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->body(); ?>
        </div>
    <?php endif;?>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'teacher')->widget(
        \kartik\select2\Select2::class,
        [
            'data' => \app\models\User::namesTeacher(),
            'options' => ['placeholder' => 'Выбирите учителя']
        ]
    ) ?>

    <?= $form->field($model, 'number')->widget(
        \kartik\select2\Select2::class,
        [
            'data' => \app\models\Schedule::NUMBER,
            'options' => ['placeholder' => 'Выбирите день недели']
        ]
    ) ?>

    <?= $form->field($model, 'lesson')->widget(
        \kartik\select2\Select2::class,
        [
            'data' => \app\models\Disciplines::namesFromTeacher(),
            'options' => ['placeholder' => 'Выбирите урок']
        ]
    ) ?>

    <?= $form->field($model, 'class')->widget(
        \kartik\select2\Select2::class,
        [
            'data' => \app\models\Schedule::CLASSES,
            'options' => ['placeholder' => 'Выбирите класс']
        ]
    ) ?>

    <?= $form->field($model, 'letter')->widget(
        \kartik\select2\Select2::class,
        [
            'data' => \app\models\Schedule::LETTER,
            'options' => ['placeholder' => 'Выбирите букву класса']
        ]
    ) ?>

    <?= $form->field($model, 'date')->input('date')
    ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Сохранить'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
