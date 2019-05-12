<?php

Yii::$app->formatter->locale = 'ru-RU';
?>
<div class="fh5co-cards">
    <div class="container-fluid">
        <div class="row animate-box">
            <div class="col-md-12 heading text-center">
                <h2>Все расписание</h2>
                <div class="glass-all" >
                    <a href="<?= \yii\helpers\Url::to(['personal-area/index']) ?>">Назад</a>
                </div>
            </div>
        </div>

        <?php if (!empty($schedule)) : ?>

            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-6 animate-box">
                    <div class="fh5co-card ">
                        <div class="columns">
                            <div class="block-lesson">
                                <div class="lesson">Урок</div>
                                <div class="lesson">День недели</div>
                                <div class="lesson">Класс</div>
                                <div class="lesson">№ урока</div>
                                <div class="lesson">Дата</div>
                            </div>
                            <?php foreach ($schedule as $model) : ?>

                            <?php if ($model->date === date("Y-m-d")) : ?>

                                <div class="block-lesson" style="background-color: greenyellow">
                                    <div class="lesson"><?= $model->lesson ?></div>
                                    <div class="lesson"><?= $model->getDay() ?></div>
                                    <div class="lesson"><?= $model->getClass() ?></div>
                                    <div class="lesson"><?= $model->getLesson() ?></div>
                                    <div class="lesson"><?= Yii::$app->formatter->asDate($model->date) ?></div>
                                </div>

                            <?php else: ?>

                                    <div class="block-lesson">
                                        <div class="lesson"><?= $model->lesson ?></div>
                                        <div class="lesson"><?= $model->getDay() ?></div>
                                        <div class="lesson"><?= $model->getClass() ?></div>
                                        <div class="lesson"><?= $model->getLesson() ?></div>
                                        <div class="lesson"><?= Yii::$app->formatter->asDate($model->date) ?></div>
                                    </div>

                            <?php endif; ?>

                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

        <?php endif; ?>
    </div>
</div>
