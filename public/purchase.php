<?php require_once "header.php" ?>

<?php
    session_start();

    $name = $_POST["name"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $zip = $_POST["zip"];
    $country = $_POST["country"];

    if (($_SESSION["cart"]) && ($name) && ($post) && ($city) && ($zip) && ($country)) {
        if (insert_order($_POST) != false) {
            display_cart($_SESSION["cart"], false, 0);

            display_card_form($name);

            display_button("show_cart.php", "Countinue-Shopping", "Continue Shoppping");
        } else {
            echo "<p> Could not store data, please try again</p>";
            display_button("checkout.php", "back", "Back");
        }
    } else {
        echo "<p> You did not fill in all the fields, please try again </p>";
        display_button("checkout.php", "back", "Back");
    }
?>

<?php require_once "footer.php" ?>

