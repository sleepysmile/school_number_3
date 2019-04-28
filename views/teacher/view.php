<?php



?>

<div class="row">
    <div class="12u mobileUI-main-content">
        <section class="content">
            <div class="teacher-name">
                <img style="width: 310px; height: 235px;" src="<?php echo $teacher->getBehavior('coverBehavior')->getUrl('medium'); ?>" alt="">
                <h2><?php echo $teacher->name ?></h2>
            </div>
            <div class="info-teacher">
                <div class="col-lg-3 text-info-teacher">
                    <h4>Дополнительная информация</h4>
                    <p><?php echo $teacher->info ?></p>
                </div>
                <div class="col-lg-3 text-info-teacher">
                    <h4>Дисциплины</h4>
                    <ul>
                        <?php foreach ($teacher->disciplines as $discipline) : ?>

                        <li><?php echo $discipline->name ?></li>

                        <?php endforeach; ?>

                    </ul>
                </div>
                <div class="col-lg-3 text-info-teacher">
                    <h4>Образоввание</h4>
                    <p><?php echo $teacher->education ?></p>
                </div>
            </div>
        </section>
    </div>
</div>
