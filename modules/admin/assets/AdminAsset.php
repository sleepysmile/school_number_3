<?php

namespace app\modules\admin\assets;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $css = [
        'css/bootstrap.min.css',
        'css/demo.css',
        'css/ready.css',
    ];
    public $js = [
        'js/demo.css',
        'js/ready.css',
    ];

    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];

    public $cssOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}