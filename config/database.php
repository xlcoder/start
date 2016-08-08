<?php

/*
 * connect database info
 */

$db = new medoo([
    'database_type' => 'mysql',
    'database_name' => 'book_sc',
    'server' => 'localhost',
    'username' => 'root',
    'password' => '123456abc',
    'charset' => 'utf8mb4',
    'option' => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
]);
