<?php

namespace bluezip\yii2\jQueryAddress;
use bluezip\yii2\jQueryAddress\assets\JQueryAddressAsset;

/**
 * 10 Mar 2014
 * @author Bluezip <serin212@hotmail.com>
 * Class Autoload
 * @package bluezip\yii2\jQueryAddress\Autoload
 */

class Autoload extends \yii\base\widget {

    public function init(){
        parent::init();
        \Yii::setAlias('@jQueryAddress', dirname(__FILE__));
        $this->registerAsset();
    }

    function run() {
        return "Hello!";
    }

    /**
     * Publish js css
     */
    private function registerAsset(){
        $view = $this->getView();
        JQueryAddressAsset::register($view);
    }
}
