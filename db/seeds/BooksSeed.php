<?php

use Phinx\Seed\AbstractSeed;

class BooksSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $data = [];

        $data[] = [
            "isbn" => $faker->isbn13,
            "author" => $faker->username,
            "title" => $faker->sentence,
            "catid" => $faker->numberBetween($min = 1, $max = 100),
            "price" => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
            "description" => $faker->word
        ];

        $this->insert("books", $data);
    }
}
