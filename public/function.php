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

function calculatePrice($cart) 
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

    $price = 0.0;
    if (is_array($cart))
    foreach($cart as $isbn => $qty) {
        $result = $db->select("books","price",["isbn" => "{$isbn}"]);
        $item = $result["isbn"];
        $itemPrice = $result["price"];
        $price += $itemPrice * $qty;
    }
}

function calculateItems($cart)
{
    $items = 0;
    if (is_array($cart)) {
        foreach ($cart as $isbn => $qty) {
            $items += $qty; 
        }
    }

    return $items;
}

function processCard($cardDetails) 
{
    return true; 
}

function insert_order($order_details) 
{
    extract($oreder_details);

    if ((!ship_name) && (!$ship_address) && (!$ship_city) && (!$ship_state) && (!$ship_zip) && (!$ship_country)) {
        $ship_name = $name;
        $ship_address = $address;
        $ship_city = $city;
        $ship_zip = $zip;
        $ship_country = $country;
    }

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
    
    $result = $db->select("customers", "customer", ["AND" => ["name" => "{$name}", "address" => "{$address}", "city" => "{$city}", "state" => "{$state}", "zip" => "{$zip}", "country" => "{$country}"]]);

    if (count($result) > 0) {
        $customerid = "bbc";
    } else {
        $result = $db->insert("customers", [
        "name" => "{$name}",
        "address" => "{$address}",
        "city" => "{$city}",
        "zip" => "{$zip}",
        "state" => "{$state}",
        "country" => "{$country}"
        ]);
    }

    if (!$result) {
        return false;
    }

}

function do_html_url($url, $title) 
{
    echo "<a href=\"{$url}\">$title</a>";
}

function display_book_form($book = "") 
{
}
