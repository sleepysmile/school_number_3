<?php

/* @var $this yii\web\View */

$this->title = 'Преподавательский состав';

?>

<div class="site-index">

    <div class="fh5co-cards">
        <div class="container-fluid">
            <div class="row animate-box">
                <div class="col-md-12 heading text-center"><h2><?= $this->title ?></h2></div>
            </div>
            <div class="row">

                <?php foreach ($teachers as $teacher) : ?>

                    <div class="col-lg-3 col-md-6 col-sm-6 animate-box">
                        <a class="fh5co-card" href="<?= \yii\helpers\Url::to(['teacher/view', 'slug' => $teacher->slug]) ?>">

                            <img src="<?php echo $teacher->getBehavior('coverBehavior')->getUrl('medium'); ?>" class="image-size">

                            <div class="fh5co-card-body">
                                <h3><?php echo $teacher->name ?></h3>
                            </div>
                        </a>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </div>

</div>
