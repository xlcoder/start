<?php

function displayCtegories()
{
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

    $result = $db->select("categories",["catid", "catname"]);

    if (!$result || $result == 0) {
        echo "There's don't have anything";
    } 

    if (count($result) == 0) {
        echo "<p>No categories currently available</p>";
        return false;
    } 

    echo "<ul>";
    foreach ($catArray as $row) {
    $url = "show_cat.php?catid=" . ($row["catid"]);
    $title = $row["catname"];
    echo "<li>";
    doHtmlUrl($url,$title);
    echo "</li>";
    }
}

function doHtmlUrl($url, $title)
{
    echo "<a hren=\"{$rul}\">{$title}</a>";
}

function getCategoryName($catid)
{
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

    $result = $db->select("categories","catname");

    if (!$result || count($result) == 0) {
        return false;
    } else {
        return $result;
    }

}

function getBooks() 
{
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

    $result = $db->select("books",["isbn", "title"]);

    if (!$result || $result == 0) {
        echo "There's don't have anything";
        return false;
    } else {
        return $result;
    }
}

function displayBooks($catArray)
{
    if (count($catArray) == 0) {
        echo "<p>No books currently available</p>";
        return;
    } 

    echo "<ul>";
    foreach ($catArray as $row) {
    $url = "show_cat.php?catid=" . ($row["isbn"]);
    $title = $row["title"];
    echo "<li>";
    doHtmlUrl($url,$title);
    echo "</li>";
    }
}

function getBookDetails() 
{
}

function displayBookDetails()
{
}

function displayCart() 
{
}
