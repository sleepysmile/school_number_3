<?php

use app\models\Reception;
use kartik\file\FileInput;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use zxbodya\yii2\galleryManager\GalleryManager;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    if ($model->isNewRecord) {
        if (\app\models\News::find()->orderBy('id DESC')->one() === null) {
            $id = 1;
        } else {
            $id = (int)(\app\models\News::find()->orderBy('id DESC')->one())->id + 1;
        }
    } else {
        $id = $model->id;
    }

    ?>


    <?= FileInput::widget([
        'name' => 'file',
        'options' => [
            'multiple' => true
        ],
        'pluginOptions' => [
            'deleteUrl' => Url::toRoute(['/site/delete-file']),
            'initialPreview' =>  $model->filesLinks,
            'initialPreviewAsDate' => true,
            'overwriteInitial' => false,
            'initialPreviewConfig' => $model->filesLinksData,
            'uploadUrl' => Url::to(['/site/save-file']),
            'uploadExtraData' => [
                'class' => $model->formName(),
                'item_id' => $id,
            ],
            'maxFileCount' => 10
        ]
    ]); ?>


    <?php if (!empty($model->files)) : ?>

        <div class="form-group">
            <h3>Ссылки на файлы</h3>
            <?php foreach ($model->files as $one) :?>

                <h3><?= $one->fileUrl ?></h3>
            <?php endforeach; ?>
        </div>

    <?php endif; ?>

    <?php try {
        echo GalleryManager::widget(
            [
                'model' => $model,
                'behaviorName' => 'galleryBehavior',
                'apiRoute' => 'news/galleryApi'
            ]
        );
    } catch (Exception $e) {
    } ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

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

    <?= $form->field($model, 'annotation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->widget(
        \trntv\yii\datetime\DateTimeWidget::class,
        [
            'momentDatetimeFormat' => 'DD.MM.YYYY HH:mm:ss',
        ])
     ?>

    <?= $form->field($model, 'publication')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Сохранить'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
