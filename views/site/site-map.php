<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;


?>

<ul class="site-map">
    <li>
        <a href="<?= \yii\helpers\Url::to(['/about/index']) ?>">Сведения об образовательной организации</a>
    </li>
    <li>
        <a href="<?= \yii\helpers\Url::to(['/simbol-of-school/index']) ?>">Символика школы</a>
    </li>
    <li>
        <a href="<?= \yii\helpers\Url::to(['/']) ?>">Новости</a>
    </li>
    <li>
        <a href="<?= \yii\helpers\Url::to(['/reception/index']) ?>">Прием в ОО</a>
    </li>
    <li>
        <a href="<?= \yii\helpers\Url::to(['/deve-prog/index']) ?>">Программа развития</a>
    </li>
    <li>
        <a href="<?= \yii\helpers\Url::to(['/org-ep/index']) ?>">Организация учебно-воспитательного процесса</a>
    </li>
    <li>
        <a href="<?= \yii\helpers\Url::to(['/el-res/index']) ?>">Электронные образовательные ресурсы</a>
    </li>
    <li>
        <a href="<?= \yii\helpers\Url::to(['/public-administration/index']) ?>">Общественное управление</a>
    </li>
    <li>
        <a href="<?= \yii\helpers\Url::to(['/educational-work/index']) ?>">Воспитательная работа</a>
    </li>
    <li>
        <a href="<?= \yii\helpers\Url::to(['/gia/index']) ?>">Государственная итоговая аттестация (ГИА)</a>
    </li>
    <li>
        <a href="<?= \yii\helpers\Url::to(['https://krd.rso23.ru/']) ?>">Электронный журнал</a>
    </li>
    <li>
        <a href="<?= \yii\helpers\Url::to(['/infob/index']) ?>">Информационная безопасность</a>
    </li>
    <li>
        <a href="<?= \yii\helpers\Url::to(['/union/index']) ?>">Наш профсоюз</a>
    </li>
    <li>
        <a href="<?= \yii\helpers\Url::to(['anti-corruption/index']) ?>">Антикоррупция</a>
    </li>
    <li>
        <a href="<?= \yii\helpers\Url::to(['/self-examination/index']) ?>">Отчет о результатах самообследования</a>
    </li>
    <li>
        <a href="<?= \yii\helpers\Url::to(['/teacher/index']) ?>">Преподовательский состав</a>
    </li>
    <li>
        <a href="<?= \yii\helpers\Url::to(['site/contact']) ?>">Контакты</a>
    </li>
</ul>


