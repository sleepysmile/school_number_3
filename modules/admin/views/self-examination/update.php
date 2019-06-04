<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SelfExamination */

$this->title = 'Самообследование';
$this->params['breadcrumbs'][] = ['label' => 'Самообследование', 'url' => ['index']];
?>
<div class="self-examination-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
