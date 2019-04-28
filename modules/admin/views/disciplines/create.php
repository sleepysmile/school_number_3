<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Disciplines */

$this->title = Yii::t('app', 'Создание дисциплины');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Дисциплины'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disciplines-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
