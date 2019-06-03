<?php

$this->title = 'Символика школы';

?>

<div class="content">

    <div class="item featured text-center">
        <div class="featured-image">

            <?php foreach ($model->getBehavior('galleryBehavior')->getImages() as $image) : ?>

                <img class="img-responsive project-image image-news" src="<?php echo $image->getUrl('medium') ?>" />

            <?php endforeach; ?>

        </div>

        <div class="desc text-left">
            <?php echo $model->info ?>
        </div><!--//desc-->
    </div><!--//item-->
</div><!--//content-->
