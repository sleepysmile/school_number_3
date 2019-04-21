<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\modules\admin\assets\AdminAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>

<nav class="navbar navbar-header navbar-expand-lg">
    <div class="container-fluid">

        <form class="navbar-left navbar-form nav-search mr-md-3" action="">
            <div class="input-group">
                <input type="text" placeholder="Search ..." class="form-control">
                <div class="input-group-append">
								<span class="input-group-text">
									<i class="la la-search search-icon"></i>
								</span>
                </div>
            </div>
        </form>
        <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
            <li class="nav-item dropdown hidden-caret">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="la la-envelope"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown hidden-caret">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="la la-bell"></i>
                    <span class="notification">3</span>
                </a>
                <ul class="dropdown-menu notif-box" aria-labelledby="navbarDropdown">
                    <li>
                        <div class="dropdown-title">You have 4 new notification</div>
                    </li>
                    <li>
                        <div class="notif-center">
                            <a href="#">
                                <div class="notif-icon notif-primary"> <i class="la la-user-plus"></i> </div>
                                <div class="notif-content">
												<span class="block">
													New user registered
												</span>
                                    <span class="time">5 minutes ago</span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="notif-icon notif-success"> <i class="la la-comment"></i> </div>
                                <div class="notif-content">
												<span class="block">
													Rahmad commented on Admin
												</span>
                                    <span class="time">12 minutes ago</span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="notif-img">
                                    <img src="assets/img/profile2.jpg" alt="Img Profile">
                                </div>
                                <div class="notif-content">
												<span class="block">
													Reza send messages to you
												</span>
                                    <span class="time">12 minutes ago</span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="notif-icon notif-danger"> <i class="la la-heart"></i> </div>
                                <div class="notif-content">
												<span class="block">
													Farrah liked Admin
												</span>
                                    <span class="time">17 minutes ago</span>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <a class="see-all" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="la la-angle-right"></i> </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="assets/img/profile.jpg" alt="user-img" width="36" class="img-circle"><span >Hizrian</span></span> </a>
                <ul class="dropdown-menu dropdown-user">
                    <li>
                        <div class="user-box">
                            <div class="u-img"><img src="assets/img/profile.jpg" alt="user"></div>
                            <div class="u-text">
                                <h4>Hizrian</h4>
                                <p class="text-muted">hello@themekita.com</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                        </div>
                    </li>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="ti-user"></i> My Profile</a>
                    <a class="dropdown-item" href="#"></i> My Balance</a>
                    <a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="ti-settings"></i> Account Setting</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="fa fa-power-off"></i> Logout</a>
                </ul>
                <!-- /.dropdown-user -->
            </li>
        </ul>
    </div>
</nav>
<div class="sidebar">
    <div class="scrollbar-inner sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="assets/img/profile.jpg">
            </div>
            <div class="info">
                <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Hizrian
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
                </a>
                <div class="clearfix"></div>

                <div class="collapse in" id="collapseExample" aria-expanded="true" style="">
                    <ul class="nav">
                        <li>
                            <a href="#profile">
                                <span class="link-collapse">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#edit">
                                <span class="link-collapse">Edit Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#settings">
                                <span class="link-collapse">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item active">
                <a href="index.html">
                    <i class="la la-dashboard"></i>
                    <p>Dashboard</p>
                    <span class="badge badge-count">5</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="components.html">
                    <i class="la la-table"></i>
                    <p>Components</p>
                    <span class="badge badge-count">14</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="forms.html">
                    <i class="la la-keyboard-o"></i>
                    <p>Forms</p>
                    <span class="badge badge-count">50</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="tables.html">
                    <i class="la la-th"></i>
                    <p>Tables</p>
                    <span class="badge badge-count">6</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="notifications.html">
                    <i class="la la-bell"></i>
                    <p>Notifications</p>
                    <span class="badge badge-success">3</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="typography.html">
                    <i class="la la-font"></i>
                    <p>Typography</p>
                    <span class="badge badge-danger">25</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="icons.html">
                    <i class="la la-fonticons"></i>
                    <p>Icons</p>
                </a>
            </li>
            <li class="nav-item update-pro">
                <button  data-toggle="modal" data-target="#modalUpdate">
                    <i class="la la-hand-pointer-o"></i>
                    <p>Update To Pro</p>
                </button>
            </li>
        </ul>
    </div>
</div>
<div class="main-panel">
    <?= $content ?>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
