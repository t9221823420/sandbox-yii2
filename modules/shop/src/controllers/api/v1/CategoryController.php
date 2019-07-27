<?php
namespace yozh\shop\controllers\api\v1;

use yozh\shop\models\Category;

class CategoryController extends BaseApiController
{
    /** {@inheritdoc} */
    public $modelClass = Category::class;
}
