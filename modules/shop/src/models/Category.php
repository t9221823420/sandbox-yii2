<?php
namespace yozh\shop\models;

class Category extends BaseActiveRecord
{
    /** {@inheritdoc} */
    public static function tableName()
    {
        return '{{%shop_category}}';
    }

    /** {@inheritdoc} */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }
}
