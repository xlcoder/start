<?php

use Phinx\Migration\AbstractMigration;

class Customers extends AbstractMigration
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
        $customers = $this->table("customers", ["id" => "customerid"]);
        $customers->addColumn("name", "string", ["limit" => 60])
            ->addColumn("address", "string", ["limit" => 80])
            ->addColumn("city", "string", ["limit" => 30,])
            ->addColumn("state", "string", ["limit" => 20, "null" => true])
            ->addColumn("zip", "string", ["limit" => 10, "null" => true ])
            ->addColumn("country", "string", ["limit" => 20])
            ->create();
    }
}
