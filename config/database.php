<?php

/*
 * connect database info
 */

$db = new medoo([
    'database_type' => 'mysql',
    'database_name' => 'bank',
    'server' => 'localhost',
    'username' => '',
    'password' => '',
    'charset' => 'utf8mb4',
    'option' => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
]);
