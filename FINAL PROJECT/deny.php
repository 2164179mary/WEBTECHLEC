<?php
include ('header.php');
require_once 'connectDB.php';
$conn = new mysqli($lh, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
if (isset($_POST['policy']) &&
    isset ($_POST['username']) &&
    isset ($_POST['deny'])) {
    $policy = get_post($conn, 'policy');
    $username = get_post($conn, 'username');
    $deny = get_post($conn, 'deny');

    $query1 = "DELETE from account where username = '$username';";
    $result1 = $conn->query($query1);
    if (!$result1) die($conn->error);

    if($result1){
        echo "<div class='top center'>";
        echo "<h3>Successfully deleted $username</h3>";
        echo "<h3>Redirecting in 3 seconds</h3>";
        echo "</div>";
        header('Refresh: 2; URL=FetchDB.php');
    }



}

function get_post($conn, $var)
{
    return $conn->real_escape_string($_POST[$var]);
}

include ('footer.php');
