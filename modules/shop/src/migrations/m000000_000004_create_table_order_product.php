<?php

use yii\db\Migration;

/**
 * Class m000000_000004_create_table_order_product
 */
class m000000_000004_create_table_order_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%shop_order_product}}', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer()->notNull(),
            'product_id' => $this->integer()->notNull(),
            'qty' => $this->integer()->defaultValue(0),
        ]);

        $this->createIndex(
            'idx-shop_order_product-order_id',
            'shop_order_product',
            'order_id'
        );

        $this->addForeignKey(
            'fk-shop_order_product-order_id',
            'shop_order_product',
            'order_id',
            'shop_order',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-shop_order_product-product_id',
            'shop_order_product',
            'product_id'
        );

        $this->addForeignKey(
            'fk-shop_order_product-product_id',
            'shop_order_product',
            'product_id',
            'shop_product',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m000000_000004_create_table_order_product cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m000000_000004_create_table_order_product cannot be reverted.\n";

        return false;
    }
    */
}
