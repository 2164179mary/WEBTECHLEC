<?php
session_start();

if (!isset($_SESSION["username"])) {
    include "admin.html";

} else {
    include "index.html";
}

?>
