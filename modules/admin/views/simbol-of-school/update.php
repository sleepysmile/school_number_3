<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SimbolOfSchool */

$this->title = 'Символика школы';
$this->params['breadcrumbs'][] = ['label' => 'Символика школы', 'url' => ['index']];
?>
<div class="simbol-of-school-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
