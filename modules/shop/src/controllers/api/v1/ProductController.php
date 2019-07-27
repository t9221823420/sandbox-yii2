<?php
namespace yozh\shop\controllers\api\v1;

use yozh\shop\models\Product;

class ProductController extends BaseApiController
{
    /** {@inheritdoc} */
    public $modelClass = Product::class;
}
