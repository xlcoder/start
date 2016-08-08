<?php require_once 'header.php'; ?>

<?php session_start(); ?>

<p>Please Choose a category:</p>

<?php
    //$catArray = getCategories();
    displayCtegories();

    if (isset($_SESSION["admin_user"])) {
        displayButton("admin.php", "admin-menu", "Admin Menu");
    }
?>


<?php require_once 'footer.php'; ?>

