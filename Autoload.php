<?php

namespace bluezip\yii2\jQueryAddress;

use bluezip\yii2\jQueryAddress\assets;

class Autoload extends \yii\base\widget {
    public function init(){
        parent::init();
        \Yii::setAlias('@jQueryAddress', dirname(__FILE__));
        $this->registerAsset();
    }
    function run() {
        return "Hello!";
    }

    private function registerAsset(){
        $view = $this->getView();
        JQueryAddressAsset::register($view);
    }
}
