<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reception */

$this->title = 'Изменить Прием в ОО: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Прием в ОО', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'изменить';
?>
<div class="reception-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
