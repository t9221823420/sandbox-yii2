<?php
namespace yozh\shop\controllers\api\v2;

use yii\rest\ActiveController;
use yozh\shop\models\Category;

class FabricController extends ActiveController
{
    protected $_modelList = [
        Category::class => Category::class,
        Product::class => Product::class,
    ];

    public function init()
    {
        parent::init();
    }
}
