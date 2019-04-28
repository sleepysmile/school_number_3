<?php

/** @var $model /app/model/News */

use yii2mod\comments\widgets\Comment;

?>

<section class="latest section">
    <div class="section-inner">
        <h2 class="heading"><?php echo $model->title ?></h2>
        <p><?php echo $model->hit ?></p>
        <div class="content">

            <div class="item featured text-center">
                <div class="featured-image">

                    <?php foreach ($model->getBehavior('galleryBehavior')->getImages() as $image) : ?>

                        <img class="img-responsive project-image" src="<?php echo $image->getUrl('medium') ?>" />

                    <?php endforeach; ?>

                </div>

                <div class="desc text-left">
                    <?php echo $model->text ?>
                </div><!--//desc-->
            </div><!--//item-->
        </div><!--//content-->
    </div><!--//section-inner-->
</section>

<?php try {
    echo Comment::widget([
        'model' => $model,
    ]);
} catch (Exception $e) {
} ?>
