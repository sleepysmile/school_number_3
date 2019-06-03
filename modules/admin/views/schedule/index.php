<?php

use app\modules\admin\model\ImportForm;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\ScheduleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Расписание');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedule-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Создание расписания'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php $form = ActiveForm::begin([
        'action' => ['import'],
        'options' => ['enctype' => 'multipart/form-data'],
    ]) ?>
    <?php echo $form->field(new ImportForm(), 'file')->fileInput() ?>
    <?php echo Html::submitButton('Импорт расписания из Excel', ['class' => 'btn btn-info']) ?>
    <?php ActiveForm::end() ?>

    <?php $form = ActiveForm::begin([
        'action' => ['delete-all'],
    ]) ?>

    <div class="pull-right">

        <?php echo Html::submitButton('Удалить все', ['class' => 'btn btn-danger']) ?>

    </div>

    <?php ActiveForm::end() ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
//            'day',
            'teacher',
            'lesson',
            'class',
            'date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
