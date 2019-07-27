<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
        '@components' => dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'components',
        '@modules' => dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'modules',
        '@yozh/shop' => '@modules/shop/src',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'suffix' => false,
            'rules' => [
                [
                    'class' => yii\rest\UrlRule::class,
                    'prefix' => 'api/v1',
                    'suffix' => false,
                    'pluralize' => false,
                    'controller' => [
                        'shop/category' => 'shop/api/v1/category', // read as <module>/controllers/<path/to/controller>
                        'shop/product' => 'shop/api/v1/product',
                    ],
                ],
            ],
        ],
    ],
    'modules' => [
        'shop' => \yozh\shop\Module::class,
    ],
];
