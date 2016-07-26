<?php

/*
 * connect database info
 */

$database = new medoo([
    'database_type' => 'mysql',
    'database_name' => '',
    'server' => 'localhost',
    'username' => '',
    'password' => '',
    'charset' => 'utf8mb4',
    'option' => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
]);
