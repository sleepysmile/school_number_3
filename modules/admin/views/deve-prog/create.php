<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DeveProg */

$this->title = 'Create Deve Prog';
$this->params['breadcrumbs'][] = ['label' => 'Deve Progs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deve-prog-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
