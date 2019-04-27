<?php

namespace app\assets;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $sourcePath = '@vendor/';

    public $css = [
        '/datatables/dataTables.bootstrap.css',
    ];
    public $js = [
        '/datatables/dataTables.bootstrap.min.js',
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];

    public $cssOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];

    public $depends = [
        '\dmstr\web\AdminLteAsset',
        '\yii\web\YiiAsset',
        '\yii\bootstrap\BootstrapAsset',
        '\yii\bootstrap\BootstrapPluginAsset',
    ];
}