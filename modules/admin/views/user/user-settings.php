<?php

use yii\widgets\ActiveForm;
use zxbodya\yii2\imageAttachment\ImageAttachmentWidget;

$this->title = 'Настройки пользователя';

?>

<?php $form = ActiveForm::begin([
    'options' => ['class' => 'top-margin'],
]) ?>

<?php try {
    echo ImageAttachmentWidget::widget(
        [
            'model' => $model,
            'behaviorName' => 'coverBehavior',
            'apiRoute' => 'user/imgAttachApi',
        ]
    );
} catch (Exception $e) {
} ?>

<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

<?= \yii\helpers\Html::submitButton('Сохранить изменеия', ['class' => 'btn btn-success']) ?>

<?php ActiveForm::end() ?>





