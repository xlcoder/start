<?php require_once 'header.php'; ?>
<?php
session_start();

@$new = $_GET["new"];

if ($new) {
    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = [];
        $_SESSION["items"] = 0;
        $_SESSION["total_price"] = "0.00";
    }

    if (isset($_SESSION["cart"][$new])) {
        $_SESSION["cart"][$new]++;
    } else {
        $_SESSION["cart"][$new] = 1;
    }

    $_SESSION["total_price"] = calculatePrice($_SESSION["cart"]);
    $_SESSION["items"] = calculateItems($_SESSION["cart"]);
    
}

if ($_SESSION["cart"] && (array_count_values($_SESSION["cart"]))) {
    display_cart($_SESSION["cart"]);
} else {
    echo "<p>There are no items in your cart</p><hr>";
}

$target = "index.php";

if ($new) {
    $details = get_book_details($new);
    if ($details["catid"]) {
        $target = "show_cat.php?catid={$details["catid"]}";
    }
}

display_button($target, "continue-shopping", "Continue Shopping");


display_button(checkout.php, "go-to-checkout", "Go To CheckOut");

?>

<?php require_once 'footer.php'; ?>
