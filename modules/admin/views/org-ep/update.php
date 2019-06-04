<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OrgEp */

$this->title = 'Организация учебно-воспитательного процесса';
$this->params['breadcrumbs'][] = ['label' => 'Org Eps', 'url' => ['index']];
?>
<div class="org-ep-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
