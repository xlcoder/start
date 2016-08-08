<?php require_once 'header.php'; ?>
<?php
    session_start();

    $isbn = $_GET["isbn"];
    
    $books = getBookDetails($isbn);

    displayBookDetails($book);

    $target = "index.php";
    if ($book["catid"]) {
        $target = "show_cat.php?catid={$book["catid"]}";
    }

    if (check_admin_uses()) {
    displayButton("edit_book_form.php?isbn={$isbn}", "edit-item", "Edit item");
    displayButton("admin.php", "admin-menu", "Admin Menu");
    displayButton($target, "continue", "continue"); 
    } else {
    displayButton("show_cart.php?new{$isbn}", "add-to-cart", "add {$book["title"]} To My Shopping Cart");
    displayButton($tart, "continue-shopping", "Continue Shopping");
    }
?>
<?php require_once 'footer.php'; ?>
