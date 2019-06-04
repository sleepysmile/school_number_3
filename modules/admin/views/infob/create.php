<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Infob */

$this->title = 'Create Infob';
$this->params['breadcrumbs'][] = ['label' => 'Infobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="infob-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
