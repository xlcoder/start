<?php

use Phinx\Migration\AbstractMigration;

class Books extends AbstractMigration
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
        $books = $this->table("books", ["id" => false, "primary_key" => "isbn"]);
        $books->addColumn("isbn", "string", ["limit" => 13])
            ->addColumn("author", "string", ["limit" => 100])
            ->addColumn("title", "string", ["limit" => 100])
            ->addColumn("catid", "integer", ["signed" => false])
            ->addColumn("price", "float")
            ->addColumn("description", "string", ["limit" => 255])
            ->create();

    }
}
