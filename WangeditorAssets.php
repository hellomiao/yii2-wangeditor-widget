<?php

namespace thinker\wangeditor;

use Yii;
use yii\web\AssetBundle;

class WangeditorAssets extends AssetBundle {

    public $sourcePath = '@vendor/thinker/yii2-wangeditor-widget/assets';
    public $basePath = '@webroot/assets';
    public $css = [
        'css/wangEditor.min.css',
    ];
    public $js = [
        'js/wangEditor.min.js',
    ];
    public $depends = ['yii\web\JqueryAsset'];

}
