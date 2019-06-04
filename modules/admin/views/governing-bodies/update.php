<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GoverningBodies */

$this->title = 'Update Governing Bodies: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Governing Bodies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="governing-bodies-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
