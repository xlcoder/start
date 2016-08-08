<?php require_once 'header.php'; ?>

<?php
session_start();

$catid = $_GET["catid"];
$name = getCategoryName($catid);

$bookArray = getBooks($catid);

displayBooks($bookArray);


if (isset($_SESSION["admin_user"])) {
    displayButton("index.php", "continue", "Continue Shopping");
    displayButton("admin.php", "admin-menu", "Admin Menu");
    displayButton("edit_category_form.php?catid={$catid}", "edit-category", "Edit Category"); } else {
    displayButton("index.php", "continue", "Continue Shopping");
}
?>
