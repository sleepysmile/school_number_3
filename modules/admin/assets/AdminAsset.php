<?php

namespace app\assets;

use Yii;
use yii\base\View;
use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $sourcePath = '@vendor/';

    public $css = [
        'datatables/dataTables.bootstrap.css',
        'css/bootstrap.css',
        'css/bootstrap.min.css',
        'css/site.css',
    ];
    public $js = [
        'datatables/dataTables.bootstrap.min.js',
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];

    public $cssOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];

    public $depends = [
        'dmstr\web\AdminLteAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'grozzzny\depends\bootstrap4\Bootstrap4Asset',
        'grozzzny\depends\bootstrap4\Bootstrap4PluginAsset',
    ];
}