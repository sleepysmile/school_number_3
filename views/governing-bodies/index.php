<?php


?>

<div class="content">

    <div class="item featured text-center">
        <div class="desc text-left">
            <?php echo $model->text ?>
        </div><!--//desc-->
        <img src="<?php echo $model->getBehavior('coverBehavior')->getUrl('medium'); ?>">
    </div><!--//item-->
</div><!--//content-->


