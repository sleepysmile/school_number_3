<?php




?>

<div class="site-index">

    <div class="fh5co-cards">
        <div class="container-fluid">
            <div class="row animate-box">
                <div class="col-md-12 heading text-center">
                    <h2>Расписание</h2>
                    <div class="glass-all" >
                    <a href="<?= \yii\helpers\Url::to(['personal-area/all']) ?>">Посмотреть все расписание</a>
                    </div>

                </div>
            </div>

            <?php if (!empty($today)) : ?>

            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-6 animate-box">
                    <div class="fh5co-card ">
                        <div style="text-align: center; padding-top: 10px"><h3>Сегодня</h3></div>
                        <div class="columns">
                            <div class="block-lesson">
                                <div class="lesson">Урок</div>
                                <div class="lesson">День недели</div>
                                <div class="lesson">Класс</div>
                                <div class="lesson">№ урока</div>
                            </div>
                            <?php foreach ($today as $model) : ?>

                            <div class="block-lesson">
                                <div class="lesson"><?= $model->lesson ?></div>
                                <div class="lesson"><?= $model->getDay() ?></div>
                                <div class="lesson"><?= $model->getClass() ?></div>
                                <div class="lesson"><?= $model->getLesson() ?></div>
                            </div>

                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php endif; ?>

            <?php if (!empty($tomorrow)) : ?>

                <div class="row">
                    <div class="col-lg-12 col-md-6 col-sm-6 animate-box">
                        <div class="fh5co-card ">
                            <div style="text-align: center; padding-top: 10px"><h3>Завтра</h3></div>
                            <div class="columns">
                                <div class="block-lesson">
                                    <div class="lesson">Урок</div>
                                    <div class="lesson">День недели</div>
                                    <div class="lesson">Класс</div>
                                    <div class="lesson">№ урока</div>
                                </div>
                                <?php foreach ($tomorrow as $model) : ?>

                                    <div class="block-lesson">
                                        <div class="lesson"><?= $model->lesson ?></div>
                                        <div class="lesson"><?= $model->getDay() ?></div>
                                        <div class="lesson"><?= $model->getClass() ?></div>
                                        <div class="lesson"><?= $model->getLesson() ?></div>
                                    </div>

                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endif; ?>

            <?php if (!empty($aftertomorrow)) : ?>

                <div class="row">
                    <div class="col-lg-12 col-md-6 col-sm-6 animate-box">
                        <div class="fh5co-card ">
                            <div style="text-align: center; padding-top: 10px"><h3>После завтра</h3></div>
                            <div class="columns">
                                <div class="block-lesson">
                                    <div class="lesson">Урок</div>
                                    <div class="lesson">День недели</div>
                                    <div class="lesson">Класс</div>
                                    <div class="lesson">№ урока</div>
                                </div>
                                <?php foreach ($aftertomorrow as $model) : ?>

                                    <div class="block-lesson">
                                        <div class="lesson"><?= $model->lesson ?></div>
                                        <div class="lesson"><?= $model->getDay() ?></div>
                                        <div class="lesson"><?= $model->getClass() ?></div>
                                        <div class="lesson"><?= $model->getLesson() ?></div>
                                    </div>

                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endif; ?>


        </div>
    </div>

</div>