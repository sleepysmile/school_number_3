<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\News */

$this->title = Yii::t('app', 'Изменить новость: {name}', [
    'name' => $model->title,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Новость'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Изменить');
?>
<div class="news-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
