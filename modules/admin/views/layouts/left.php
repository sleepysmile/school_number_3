<?php

use yii\widgets\Menu;

?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel" style="position: initial">
            <div class="pull-left image">
                <img src="<?= Yii::$app->user->identity->getBehavior('coverBehavior')->getUrl('medium'); ?>" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username ?></p>
            </div>
        </div>

        <?php try {
            echo Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                    'items' => [
                        ['label' => 'Меню', 'options' => ['class' => 'header']],
//                        ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'], 'visible' => Yii::$app->user->can('admin')],
//                        ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'], 'visible' => Yii::$app->user->can('admin')],
                        ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                        [
                            'label' => 'Пользователи',
                            'url' => ['user/index'],
                        ],
                        [
                            'label' => 'Новости',
                            'url' => ['news/index'],
                        ],
                        [
                            'label' => 'Дисциплины',
                            'url' => ['disciplines/index'],
                        ],
                        [
                            'label' => 'Портфолио учителей',
                            'url' => ['teacher/index'],
                        ],
                        [
                            'label' => 'Символика школы',
                            'url' => ['simbol-of-school/update', 'id' => 1],
                        ],
                        [
                            'label' => 'Электронные ресурсы',
                            'url' => ['el-res/update', 'id' => 1],
                        ],
                        [
                            'label' => 'ГИА',
                            'url' => ['gia/update', 'id' => 1],
                        ],
                        [
                            'label' => 'Общественное управление',
                            'url' => ['public-administration/update', 'id' => 1],
                        ],
                        [
                            'label' => 'Наш Профсоюз',
                            'url' => ['union/update', 'id' => 1],
                        ],
                        [
                            'label' => 'Расписание',
                            'url' => ['schedule/index'],
                        ],
                        [
                            'label' => 'Модерация комментариев',
                            'url' => ['comment/index'],
                        ],
                    ],
                ]
            );
        } catch (Exception $e) {
        } ?>

    </section>

</aside>
