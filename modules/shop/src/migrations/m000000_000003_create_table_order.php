<?php

use yii\db\Migration;

/**
 * Class m000000_000003_create_table_order
 */
class m000000_000003_create_table_order extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%shop_order}}', [
            'id' => $this->primaryKey(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
        ]);

        $this->createIndex(
            'idx-shop_order-user_id',
            'shop_order',
            'user_id'
        );

        $this->addForeignKey(
            'fk-shop_order-user_id',
            'shop_order',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m000000_000003_create_table_order cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m000000_000003_create_table_order cannot be reverted.\n";

        return false;
    }
    */
}
