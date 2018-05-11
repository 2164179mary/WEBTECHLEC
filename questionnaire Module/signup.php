<?php
require_once 'connectDB.php';
$conn = new mysqli($lh, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
if(isset($_POST['username']) &&
    isset($_POST['password']) &&
    isset($_POST['firstName']) &&
    isset($_POST['lastName'])) {
    $_username = get_post($conn, 'username');
    $_password = get_post($conn, 'password');
    $_firstName = get_post($conn, 'firstName');
    $_lastName = get_post($conn, 'lastName');
    $_query = "INSERT INTO account (username, password, fName, lName)
VALUES ('$_username', '$_password', '$_firstName', '$_lastName');";
    $_result = $conn->query($_query);
    //setType($_type, $_username);
    if (!$_result){
        $_usernameError = "Username already exists";
        echo "$_usernameError";
    } else echo "Welcome " . $_username . "! Your registration has been submitted.";
}

function get_post($conn, $var)
{
    return $conn->real_escape_string($_POST[$var]);
}

?>