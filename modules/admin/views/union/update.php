<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Union */

$this->title = 'Наш Профсоюз' ;
$this->params['breadcrumbs'][] = ['label' => 'Наш Профсоюз', 'url' => ['index']];
?>
<div class="union-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
