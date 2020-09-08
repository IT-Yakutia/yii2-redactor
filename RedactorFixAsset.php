<?php

namespace uraankhayayaal\redactor;
use yii\web\AssetBundle;

class RedactorFixAsset extends AssetBundle
{
	public $sourcePath = '@vendor/uraankhayayaal/yii2-redactor/src/';

    public $css = [
		'redactor.css',
        'handle/handle.css',
    ];
    public $js = [
        'redactor.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'backend\assets\AppAsset',
    ];
}
