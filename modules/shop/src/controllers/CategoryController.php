<?php
namespace yozh\shop\controllers;

use yozh\shop\models\Category;

class CategoryController extends BaseController
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $categoryCollection = Category::findAll([]);

        return $this->render('index', [
            'categoryCollection' => $categoryCollection,
        ]);
    }
}
