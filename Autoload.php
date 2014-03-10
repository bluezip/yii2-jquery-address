<?php

namespace bluezip\yii2\jQueryAddress;

class Autoload extends \yii\base\widget {
    public function init(){
        parent::init();
        \Yii::setAlias('@jQueryAddress', dirname(__FILE__));
    }
    function run() {
        return "Hello!";
    }
}
