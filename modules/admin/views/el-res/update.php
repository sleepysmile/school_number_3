<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ElRes */

$this->title = 'Электронные образовательные ресурсы';
$this->params['breadcrumbs'][] = ['label' => 'Электронные образовательные ресурсы', 'url' => ['index']];
?>
<div class="el-res-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
