<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use zxbodya\yii2\imageAttachment\ImageAttachmentWidget;

/* @var $this yii\web\View */
/* @var $model app\models\Teacher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php try {
        echo ImageAttachmentWidget::widget(
            [
                'model' => $model,
                'behaviorName' => 'coverBehavior',
                'apiRoute' => 'teacher/imgAttachApi',
            ]
        );
    } catch (Exception $e) {
    } ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'education')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'allDisciplines')->widget(
        \kartik\select2\Select2::class,
        [
            'data' => \app\models\Disciplines::names(),
            'options' => ['multiple' => true, 'placeholder' => 'Выбирите дисциплину учителя']
        ]

    ) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Сохранить'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
