<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GoverningBodies */

$this->title = 'Create Governing Bodies';
$this->params['breadcrumbs'][] = ['label' => 'Governing Bodies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="governing-bodies-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
