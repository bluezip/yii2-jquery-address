<?php
namespace bluezip\yii2\jQueryAddress\assets;

use yii\web\AssetBundle;

/**
 * 10 Mar 2014
 * @author Bluezip <serin212@hotmail.com>
 * Class JqueryAddressAsset
 * @package bluezip\yii2\jQueryAddress\assets
 */

class JQueryAddressAsset extends AssetBundle
{

    public $sourcePath = '@jQueryAddress/dist/';
    public $path = '';
    public $css = [];
    public $js = [
        'js/jquery.address-1.5.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}