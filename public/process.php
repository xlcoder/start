<?php require_once "header.php" ?>
<?php
    session_start();

    $card_type = $_POST["card_type"];
    $card_number = $_POST["card_number"];
    $card_month = $_POST["card_month"];
    $card_year = $_POST["card_year"];
    $card_name = $_POST["card_name"];

    if (($_SESSION["card"]) && ($card_type) && ($card_number) && ($card_month) && ($card_year) && ($card_name)) {
        display_cart($_SESSION["cart"], false, 0);

        display_shipping(calculate_shipping_cost);

        if (process_card($_POST)) {
            session_destroy();

            echo "<p> Thank you for shopping with us. your order has been placed </p>";

            display_button("index.php", "Continue-shooping", "Continue Shopping");
        } else {
            echo "<p> Colud not process your card Please contact the card issuer or try again";

            display_button("purchase.php", "back", "Back");
        }
    }
?>

<?php require_once "footer.php" ?>
