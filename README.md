Jquery address
==============
The jQuery Address plugin provides powerful deep linking capabilities and allows the creation of unique virtual addresses that can point to a website section or an application state

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist bluezip/bluezip-yii2-jquery-address "*"
```

or add

```
"bluezip/bluezip-yii2-jquery-address": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<? \bluezip\yii2\jquery\address\Load::widget(); ?>
```