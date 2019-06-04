<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EducationalWork */

$this->title = 'Воспитательная работа';
$this->params['breadcrumbs'][] = ['label' => 'Воспитательная работа', 'url' => ['index']];
?>
<div class="educational-work-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
