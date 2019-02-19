<?php

namespace r0m1g0\treegrid;

use yii\web\AssetBundle;

/**
 * This asset bundle provides the [jQuery cookie plugin library]
 */
class JqueryCookieAsset extends AssetBundle {

    public $sourcePath = '@bower/jquery-cookie';

    public $js = [
        'jquery.cookie.js',
    ];

    public $css = [
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];

} 