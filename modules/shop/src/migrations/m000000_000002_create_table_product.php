<?php

use yii\db\Migration;

/**
 * Class m000000_000002_create_table_product
 */
class m000000_000002_create_table_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%shop_product}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull()->unique(),
            'sku' => $this->string()->notNull()->unique(),
            'price' => $this->float()->defaultValue(0),
            'weight' => $this->float()->defaultValue(0),
        ]);

        $this->createIndex(
            'idx-shop_product-category_id',
            'shop_product',
            'category_id'
        );

        $this->addForeignKey(
            'fk-shop_product-category_id',
            'shop_product',
            'category_id',
            'shop_category',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m000000_000002_create_table_product cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m000000_000002_create_table_product cannot be reverted.\n";

        return false;
    }
    */
}
