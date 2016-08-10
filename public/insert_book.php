<?php require_once "header.php" ?>
<?php
    session_start();

    if (check_admin_user()) {
        if (filled_out($_POST)) {
            $isbn = $_POST["isbn"];
            $title = $_POST["title"];
            $author = $_POST["author"];
            $catid = $_POST["catid"];
            $price = $_POST["price"];
            $subscription = $_POST["subscription"];

            if (insert_book($isbn, $title, $author, $catid, $price, $subscription)) {
                echo "<p>Book <em>" . stripslashed($title) . "</em>was added to the database. </p>";
            } else {
                echo "<p>Book <em>" . stripslashed($title) . "</em>clould not be  added to the database. </p>";
            }
        do_html_url("admin.php", "Back to administration menu");
        } else {
            echo "<p> you have not filled out the form. please try again. </p>";
        }
    }  
?>
<?php require_once "footer.php" ?>

