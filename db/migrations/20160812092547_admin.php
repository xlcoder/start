<?php

use Phinx\Migration\AbstractMigration;

class Admin extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $admin = $this->table("admin", ["id" => false, "primary_key" => "username"]);
        $admin->addColumn("username", "string", ["limit" => 16])
            ->addColumn("password", "string", ["limit" => 255])
            ->create();

        //$order_items = $this->table("order_items", ["id" => false]);
        //$order_items->addColumn("orderid", "integer", ["signed" => false])
            //->addColumn("isbn", "string", ["limit" => 13])
            //->addColumn("item_price", "float")
            //->addColumn("quantity", "integer", ["limit" => MysqlAdapter::INT_TINY, "signed" => false])
            //->addForeignKey("orderid", "orders", "orderid",
                            //["delete" => "CASCADE", "update" => "CASCADE"])
            //->create();
    }
}
