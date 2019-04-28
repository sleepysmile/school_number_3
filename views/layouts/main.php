<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'МБОУ гимназия №3',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    try {
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                [
                    'label' => 'Сведенья о школе',
                    'items' => [
                        ['label' => 'Сведения об образовательной организации', 'url' => ['/#']],
                        ['label' => 'Аттестация педагогических работников', 'url' => ['/#']],
                        ['label' => 'Символика школы', 'url' => ['/#']],
                        ['label' => 'Новости', 'url' => ['/#']],
                        ['label' => 'Прием в ОО', 'url' => ['/#']],
                        ['label' => 'Программа развития', 'url' => ['/#']],
                        ['label' => 'Организация учебно-воспитательного процесса', 'url' => ['/#']],
                        ['label' => 'Электронные образовательные ресурсы', 'url' => ['/#']],
                        ['label' => 'Общественное управление', 'url' => ['/#']],
                        ['label' => 'Приоритетный национальный проект «Образование»', 'url' => ['/#']],
                        ['label' => 'Воспитательная работа', 'url' => ['/#']],
                        ['label' => 'Государственная итоговая аттестация (ГИА)', 'url' => ['/#']],
                        ['label' => 'Центр профориентацинной работы', 'url' => ['/#']],
                        ['label' => 'Электронный журнал', 'url' => 'https://krd.rso23.ru/'],
                        ['label' => 'Информационная безопасность', 'url' => ['/#']],
                        ['label' => 'Наш профсоюз', 'url' => ['/#']],
                        ['label' => 'Карта сайта', 'url' => ['/#']],
                        ['label' => 'ГТО', 'url' => ['/#']],
                        ['label' => 'Антикоррупция', 'url' => ['/#']],
                        ['label' => 'Отчет о результатах самообследования', 'url' => ['/#']],
                    ],
                ],
                ['label' => 'Контакты', 'url' => ['/site/contact']],
                ['label' => 'Настройки аккаунта', 'url' => ['user/user-settings'], 'visible' => !Yii::$app->user->isGuest],
                Yii::$app->user->isGuest ? (
                ['label' => 'Вход', 'url' => ['/site/login']]
                ) : (
                    '<li>'
                    . Html::beginForm(['/site/logout'], 'post')
                    . Html::submitButton(
                        'Выйти из аккаунта',
                        ['class' => 'btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
                )
            ],
        ]);
    } catch (Exception $e) {
    }
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
