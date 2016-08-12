<?php

use Phinx\Migration\AbstractMigration;

class Orders extends AbstractMigration
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
        $orders = $this->table("orders", ["id" => "orderid"]);
        $orders->addColumn("amount", "float")
            ->addColumn("customerid", "integer")
            ->addColumn("date", "date")
            ->addColumn("order_status", "string", ["limit" => 10, "null" => true])
            ->addColumn("ship_name", "string", ["limit" => 60])
            ->addColumn("ship_address", "string", ["limit" => 80])
            ->addColumn("ship_city", "string", ["limit" => 30])
            ->addColumn("ship_state", "string", ["limit"=> 20, "null" => true])
            ->addColumn("ship_zip", "string", ["limit" => 10, "null" => true])
            ->addColumn("ship_country", "string", ["limit" => 20])
            ->addForeignKey("customerid", "customers", "customerid", ["delete" => "CASCADE", "update" => "CASCADE" ])
            ->create();
    }
}
