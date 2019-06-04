<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AntiCorruption */

$this->title = 'Create Anti Corruption';
$this->params['breadcrumbs'][] = ['label' => 'Anti Corruptions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anti-corruption-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
