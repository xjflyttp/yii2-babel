<?php

namespace xj\babel;

use yii\web\AssetBundle;

/**
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class BrowserAsset extends AssetBundle
{

    public $sourcePath = '@bower/babel';
    public $basePath = '@webroot/assets';
    public $js = ['browser.js'];

}
