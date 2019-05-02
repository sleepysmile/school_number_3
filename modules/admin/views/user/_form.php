<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); //TODO?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'role')->widget(
        \kartik\select2\Select2::class,
        [
            'data' => \app\models\AuthItem::role(),
            'options' => ['placeholder' => 'Роль пользователя']
        ]
    ) ?>

    <?= $form->field($model, 'status')->widget(
        \kartik\select2\Select2::class,
        [
            'data' => \app\models\User::STATUS,
            'options' => ['placeholder' => 'Статус пользователя']
        ]
    ) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Сохранить'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
