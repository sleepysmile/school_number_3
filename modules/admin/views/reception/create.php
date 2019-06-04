<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reception */

$this->title = 'Прием в ОО';
$this->params['breadcrumbs'][] = ['label' => 'Прием в ОО', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reception-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
