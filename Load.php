<?php

namespace bluezip\yii2\jquery\address;
use bluezip\yii2\jquery\address\assets\Asset;

/**
 * 10 Mar 2014
 * @author Bluezip <serin212@hotmail.com>
 * Class Autoload
 * @package bluezip\yii2\jquery\address\Load
 */

class Load extends \yii\base\widget {

    public function init(){
        parent::init();
        \Yii::setAlias('@BZJQueryAddress', dirname(__FILE__));
        $this->registerAsset();
    }

    /**
     * No return
     * @return string
     */
    function run() {
        return '';
    }

    /**
     * Publish js and css
     */
    private function registerAsset(){
        $view = $this->getView();
        Asset::register($view);
    }
}
