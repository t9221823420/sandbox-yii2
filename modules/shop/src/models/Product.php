<?php

namespace yozh\shop\models;

class Product extends BaseActiveRecord
{
    /** {@inheritdoc} */
    public static function tableName()
    {
        return '{{%shop_product}}';
    }

    /** {@inheritdoc} */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],

            [['category_id',], 'integer'],
            [['category_id',], 'compare', 'skipOnError' => true, 'operator' => '>', 'compareValue' => 0],

            [
                ['category_id'],
                'exist',
                'skipOnError' => true,
                'targetClass' => Category::class,
                'targetAttribute' => ['category_id' => 'id'],
            ],

        ];
    }

    public function extraFields()
    {
        return [
            'category',
            'callback' => function(){
                return 'weight: ' . $this->weight . ' kg';
            },
        ];
    }

    public function getCategory( array $condition = [] )
    {
        $query = $this->hasOne( Category::class, [ 'id' => 'category_id' ] )
            ->where( $condition )
            ->indexBy( 'id' )
        ;

        return $query;
    }
}
