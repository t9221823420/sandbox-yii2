<?php
namespace yozh\shop\models;

use Yii;
use yii\db\ActiveQuery as ActiveQuery;

abstract class BaseActiveRecord extends \yii\db\ActiveRecord
{
    public static function find()
    {
        $class = static::class . 'Query';

        if( class_exists( $class ) ) {
            return new $class( static::class );
        }
        else {
            return Yii::createObject( ActiveQuery::class, [ get_called_class() ] );
        }
    }
}
