<?php 
require_once '../vendor/autoload.php';
require_once '../config/database.php';
require_once "../config/seo.php";
require_once "../config/config.php";

$faker = Faker\Factory::create();

$result = $db->insert("books",[
    "isbn" => "{$faker->isbn13}",
    "author" => "{$faker->name}",
    "title" => "{$faker->word}",
    "catid" => "{$faker->randomDigit}",
    "price" => "{$faker->randomFloat}",
    "description" => "{$faker->paragraph}"
]);

$query = $db->select("books",["isbn", "title"]);
    
if (!$query) {
    echo "There is nothing";
} else {
    echo "Faker database success";
}

//var_dump($query);

foreach($query as $value) {
    echo "{$value["isbn"]} 's book title is {$value["title"]} <br>";
}
