<?php




?>

<div class="site-index">

    <div class="fh5co-cards">
        <div class="container-fluid">
            <div class="row animate-box">
                <div class="col-md-12 heading text-center"><h2>Расписание</h2></div>
            </div>

            <?php if (!empty($monday)) : ?>

            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-6 animate-box">
                    <div class="fh5co-card ">
                        <div class="columns">
                            <?php foreach ($monday as $model) : ?>

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
            <?php if (!empty($tuesday)) : ?>

            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-6 animate-box">
                    <div class="fh5co-card ">
                        <div class="columns">
                            <?php foreach ($tuesday as $model) : ?>

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
            <?php if (!empty($wednesday)) : ?>

            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-6 animate-box">
                    <div class="fh5co-card ">
                        <div class="columns">
                            <?php foreach ($wednesday as $model) : ?>

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
            <?php if (!empty($thursday)) : ?>

            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-6 animate-box">
                    <div class="fh5co-card ">
                        <div class="columns">
                            <?php foreach ($thursday as $model) : ?>

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
            <?php if (!empty($friday)) : ?>

            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-6 animate-box">
                    <div class="fh5co-card ">
                        <div class="columns">
                            <?php foreach ($friday as $model) : ?>

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
            <?php if (!empty($saturday)) : ?>

            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-6 animate-box">
                    <div class="fh5co-card ">
                        <div class="columns">
                            <?php foreach ($saturday as $model) : ?>

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