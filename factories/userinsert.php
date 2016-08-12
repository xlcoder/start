<?php 
require_once '../vendor/autoload.php';
require_once '../config/database.php';
require_once "../config/seo.php";
require_once "../config/config.php";

$faker = Faker\Factory::create();

$result = $db->insert("admin",[
    "username" => "{$faker->name}",
    "password" => "{$faker->password}"
]);


if (!$result) {
    echo "Database Seed Success!";
} else {
    echo "Something have wrong";
}

echo "<br>";

var_dump($db->select("admin","*"));
