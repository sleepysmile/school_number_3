<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AntiCorruption */

$this->title = 'Антикоррупция';
$this->params['breadcrumbs'][] = ['label' => 'Антикоррупция', 'url' => ['index']];
?>
<div class="anti-corruption-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
