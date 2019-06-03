<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PublicAdministration */

$this->title = 'Общественное управление';
$this->params['breadcrumbs'][] = ['label' => 'Общественное управление', 'url' => ['index']];
?>
<div class="public-administration-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
