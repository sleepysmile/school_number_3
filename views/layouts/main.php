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
<style>
    #finevision-need-pay {
        display: none;
    }

    @media (max-width: 640px){
        #finevision_banner{
            display: none;
        }
    }
</style>
<header>
    <div class="mobile-head container">
        <div class="pull-left left-head">
            <a href="<?= \yii\helpers\Url::home() ?>">МБОУ гимназия №3</a>
        </div>
        <div class="pull-right right-head">
            <div>
                <p>Адрес: г.Краснодар, ул. Хакурате, 5</p>
                <a href="tel:255-93-91">Тел: 255-93-91</a>
            </div>
        </div>
    </div>
    <div id="finevision_banner" onclick="finevision.activate_navbar()" style="cursor: pointer; z-index: 9999; background: rgb(255, 255, 255); border: 2px solid rgb(0, 0, 0); float: right; position: fixed;     right: 0px;
    top: 0;">
        <img width="80" src="http://finevision.ru/static/banner1.jpg">
        <script src="http://finevision.ru/static/js/finevision_banner.js">
        </script>
    </div>
</header>


<div class="wrap">
    <?php
    NavBar::begin([
        'options' => [
            'class' => 'navbar-inverse',
        ],
    ]);
    try {
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav'],
            'items' => [
                [
                    'label' => 'Сведенья о школе',
                    'items' => [
                        ['label' => 'Сведения об образовательной организации', 'url' => ['/about/index']],
                        ['label' => 'Символика школы', 'url' => ['/simbol-of-school/index']],
                        ['label' => 'Прием в ОО', 'url' => ['/reception/index']],
                        ['label' => 'Программа развития', 'url' => ['/deve-prog/index']],
                        ['label' => 'Организация учебно-воспитательного процесса', 'url' => ['/org-ep/index']],
                        ['label' => 'Воспитательная работа', 'url' => ['/educational-work/index']],
                        ['label' => 'Наш профсоюз', 'url' => ['/union/index']],
                    ],
                ],
                [
                    'label' => 'Прочее',
                    'items' => [
                        ['label' => 'Новости', 'url' => ['/']],
                        ['label' => 'Электронные образовательные ресурсы', 'url' => ['/el-res/index']],
                        ['label' => 'Общественное управление', 'url' => ['/public-administration/index']],
                        ['label' => 'Государственная итоговая аттестация (ГИА)', 'url' => ['/gia/index']],
                        ['label' => 'Электронный журнал', 'url' => 'https://krd.rso23.ru/'],
                        ['label' => 'Информационная безопасность', 'url' => ['/infob/index']],
                        ['label' => 'Антикоррупция', 'url' => ['anti-corruption/index']],
                        ['label' => 'Отчет о результатах самообследования', 'url' => ['/self-examination/index']],
                    ],
                ],
                ['label' => 'Преподовательский состав', 'url' => ['/teacher/index']],
                ['label' => 'Контакт', 'url' => ['/site/contact']],
                ['label' => 'Карта сайта', 'url' => ['site/site-map']],
                ['label' => 'Вход', 'url' => ['/site/login'], 'visible' => Yii::$app->user->isGuest],
                ['label' => 'Регистрация', 'url' => ['/site/signup'], 'visible' => Yii::$app->user->isGuest],
                [
                    'label' => 'Аккаунт',
                    'items' => [
                        ['label' => 'Настройки аккаунта', 'url' => ['user/user-settings']],
                        ['label' => 'Личный кабинет', 'url' => ['/personal-area/index'], 'visible' => (Yii::$app->user->can('teacher') || Yii::$app->user->can('parent'))],
                        (
                            '<li>'
                            . Html::a("Выход", ['/site/logout'], [
                                'data' => ['method' => 'post'],
                            ])
                            . '</li>'
                        )
                    ],
                    'visible' => !Yii::$app->user->isGuest
                ],
                ['label' => 'Админ панель', 'url' => ['/admin/'], 'visible' => Yii::$app->user->can('admin')],

            ],
        ]);
    } catch (Exception $e) {
        echo $e->getMessage();
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
