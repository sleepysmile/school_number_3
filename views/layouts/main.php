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
                        ['label' => 'Сведения об образовательной организации', 'url' => ['/about/index']],
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
                ['label' => 'Преподовательский состав', 'url' => ['/teacher/index']],
                ['label' => 'Контакты', 'url' => ['/site/contact']],
                ['label' => 'Настройки аккаунта', 'url' => ['user/user-settings'], 'visible' => !Yii::$app->user->isGuest],
                ['label' => 'Карта сайта', 'url' => ['site/site-map']],
                ['label' => 'Регистрация', 'url' => ['/site/signup']],
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
        <div class="pull-left">
            <div>
                График работы:
                <ul>
                    <li>понедельник - с 9-00 до 18-00</li>
                    <li>вторник - с 9-00 до 18-00</li>
                    <li>среда - с 9-00 до 18-00</li>
                    <li>четверг - с 9-00 до 18-00</li>
                    <li>пятница - с 9-00 до 17-00</li>
                </ul>
                <a href="tel:255-93-91">Тел: 255-93-91</a>
            </div>
            <p><?= Yii::powered() ?></p>
        </div>
        <div class="pull-right">
            <p>Адрес: г.Краснодар, ул. Хакурате, 5</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2819.1268542263538!2d38.97667671586467!3d45.04264757909832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40f04f9ccb13411f%3A0x5c7864333218f009!2z0YPQuy4g0KXQsNC60YPRgNCw0YLQtSwgNSwg0JrRgNCw0YHQvdC-0LTQsNGALCDQmtGA0LDRgdC90L7QtNCw0YDRgdC60LjQuSDQutGA0LDQuSwgMzUwMDE1!5e0!3m2!1sru!2sru!4v1556467584514!5m2!1sru!2sru" width="300" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
