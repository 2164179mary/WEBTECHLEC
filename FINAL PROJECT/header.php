<?php
session_start();

if (!isset($_SESSION["username"])) {
    include 'logInHeader.php';
    return;
} else {
    include 'logOutHeader.php';
    return;
}
?>

