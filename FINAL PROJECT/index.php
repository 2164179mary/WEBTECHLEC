<?php
session_start();

if (!isset($_SESSION['username'])) {
    include 'logInHeader.php';
} else {
    include 'logOutHeader.php';
}
include "homeContent.php";
include "footer.php";

?>