<?php

/* @var $this yii\web\View */
/* @var $news app\models\News */

$this->title = 'Школа №3';
?>
<div class="site-index">

    <div class="fh5co-cards">
        <div class="container-fluid">
            <div class="row animate-box">
                <div class="col-md-12 heading text-center"><h2>Новости школы</h2></div>
            </div>
            <div class="row">

                <?php foreach ($news as $oneNews) : ?>

                <div class="col-lg-12 col-md-6 col-sm-6 animate-box">
                    <a class="fh5co-card" href="<?= \yii\helpers\Url::to(['news/view', 'slug' => $oneNews->slug]) ?>">

                        <div class="beetwen">
                            <?php foreach ($oneNews->getBehavior('galleryBehavior')->getImages() as $image) : ?>

                                <img src="<?php echo $image->getUrl('medium') ?>" alt="Free HTML5 Bootstrap template" class="image-size">

                            <?php endforeach; ?>
                        </div>

                        <div class="fh5co-card-body">
                            <h3><?php echo $oneNews->title ?></h3>
                            <p><?php echo $oneNews->annotation ?></p>
                        </div>
                    </a>
                </div>

                <?php endforeach; ?>

            </div>
        </div>
    </div>

</div>
