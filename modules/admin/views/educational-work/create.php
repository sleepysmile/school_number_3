<?php

use app\models\EducationalWork;
use yii\helpers\Html;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model app\models\EducationalWork */

$this->title = 'Create Educational Work';
$this->params['breadcrumbs'][] = ['label' => 'Educational Works', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="educational-work-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>