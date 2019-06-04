<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DeveProg */

$this->title = 'Программа развития';
$this->params['breadcrumbs'][] = ['label' => 'Программа развития', 'url' => ['index']];
?>
<div class="deve-prog-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
