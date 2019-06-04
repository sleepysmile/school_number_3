<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Infob */

$this->title = 'Информационная безопасность';
$this->params['breadcrumbs'][] = ['label' => 'Информационная безопасность', 'url' => ['index']];
?>
<div class="infob-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
