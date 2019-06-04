<?php

use kartik\depdrop\DepDrop;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); //TODO?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->textInput(['maxlength' => true])->label('Пароль') ?>

    <?= $form->field($model, 'role')->widget(
        \kartik\select2\Select2::class,
        [
            'data' => \app\models\AuthItem::role(),
            'options' => [
                'placeholder' => 'Роль пользователя',
                'id' => 'role-id']
        ]
    )->label('Роль на сайте') ?>

    <?= $form->field($model, 'status')->widget(
        \kartik\select2\Select2::class,
        [
            'data' => \app\models\User::STATUS,
            'options' => ['placeholder' => 'Статус пользователя']
        ]
    ) ?>

    <?= $form->field($model, 'classes')->widget(
        \kartik\select2\Select2::class,
        [
            'data' => \app\models\User::CLASSES,
            'options' => [
                'placeholder' => 'Выберите класс ребёнка родителя',
            ]
        ]
    )->label('Класс') ?>

    <?= $form->field($model, 'letter')->widget(
        \kartik\select2\Select2::class,
        [
            'data' => \app\models\User::LETTER,
            'options' => [
                'placeholder' => 'Выберите букву ребёнка родителя',
            ]
        ]
    )->label('Буква') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Сохранить'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
