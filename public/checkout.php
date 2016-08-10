<?php require_once "header.php" ?>
<?php
    session_start();

    if (($_SESSION["cart"]) && (array_count_values($_SESSION["cart"]))) {
        displayCart($_SESSION["cart"], false, 0);
        display_check_form();
    } else {
        echo "<p> There are no itmes in your cart";
    }

    display_button("show_cart.php", "Continue-shooping", "Continue Shopping");

?>

<?php require_once "footer.php" ?>
