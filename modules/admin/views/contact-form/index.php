<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Отзывы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-form-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'name',
                'label' => 'Имя'
            ],
            'email:email',
            [
                'attribute' => 'body',
                'label' => 'Текст'
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {delete}',
            ],
        ],
    ]); ?>


</div>
