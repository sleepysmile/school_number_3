<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Gia */

$this->title = 'Государственная (итоговая) аттестация';
$this->params['breadcrumbs'][] = ['label' => 'Государственная (итоговая) аттестация', 'url' => ['index']];
?>
<div class="gia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
