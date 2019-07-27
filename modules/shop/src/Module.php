<?php

namespace yozh\shop;

use yii\base\Module as BaseModule;

class Module extends BaseModule
{
    const MODULE_ID = 'shop';
    
    public $controllerNamespace = 'yozh\\' . self::MODULE_ID . '\controllers';
}
