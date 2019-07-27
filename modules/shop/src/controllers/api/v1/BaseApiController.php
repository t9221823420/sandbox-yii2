<?php

namespace yozh\shop\controllers\api\v1;

use Yii;
use yii\filters\Cors;
use yii\rest\ActiveController;
use yii\web\Response;

abstract class BaseApiController extends ActiveController
{
    private const ALLOWED_DOMAINS = [
        'http://localhost:8080',
    ];

    public function beforeAction($action)
    {
        $response = Yii::$app->getResponse();
        $response->format = Response::FORMAT_JSON;

        return parent::beforeAction($action);
    }

    public function behaviors()
    {
        return [
            'corsFilter' => [
                'class' => Cors::class,
                'cors' => [
                    // restrict access to domains:
                    'Origin' => self::ALLOWED_DOMAINS,
                    'Access-Control-Request-Headers' => ['*'],
                    'Access-Control-Request-Method' => ['POST', 'GET', 'DELETE', 'PUT', 'PATCH'],
                    'Access-Control-Allow-Credentials' => true,
                    'Access-Control-Max-Age' => 3600, // Cache (seconds)
                ],
            ]
        ];
    }
}
