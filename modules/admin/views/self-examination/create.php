<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SelfExamination */

$this->title = 'Create Self Examination';
$this->params['breadcrumbs'][] = ['label' => 'Self Examinations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="self-examination-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
