<?php require_once "header.php" ?>
<?php
session_start();

if (($_POST["username"]) && ($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (login($username, $password)) {
        $_SESSION["admin_user"] = $username;
    } else {
        echo "<p>you could not be logged in<br> you muse be logged in to view this page";
        do_html_url("login.php", "Login");
        exit;
    }
}

if (check_admin_user()) {
    display_admin_menu();
} else {
    echo "<p> You are not authorized to enter the administration area</p>";
}


?>

<?php require_once "header.php" ?>
