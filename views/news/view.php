<?php

/** @var $model /app/model/News */
/* @var $this yii\web\View */

use yii2mod\comments\widgets\Comment;

$this->title = 'Новость: ' . $model->slug;

?>

<style>
    .comment-author-avatar img{
        width: 60px;
    }
</style>
<section class="latest section">
    <div class="section-inner">
        <h2 class="heading"><?php echo $model->title ?></h2>
        <div class="news-ann">
            <div>Просмотры:  <?php echo $model->hit ?></div>
            <div>Добавил: <?php echo $model->createdBy->username ?></div>
            <div>Дата: <?php echo $model->date ?></div>
        </div>
        <div class="content">

            <div class="item featured text-center">
                <div class="featured-image">

                    <?php foreach ($model->getBehavior('galleryBehavior')->getImages() as $image) : ?>

                        <img class="img-responsive project-image image-news" src="<?php echo $image->getUrl('medium') ?>" />
                    
                    <?php endforeach; ?>

                </div>

                <div class="desc text-left">
                    <?php echo $model->text ?>
                </div><!--//desc-->
            </div><!--//item-->
        </div><!--//content-->
    </div><!--//section-inner-->
</section>

<?php if (!Yii::$app->user->isGuest) : ?>

<?php try {
    echo Comment::widget([
        'model' => $model,
    ]);
} catch (Exception $e) {
    echo $e->getMessage();
} ?>

<?php endif; ?>
