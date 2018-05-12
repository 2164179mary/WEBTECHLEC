<?php
include ('header.php');
require_once 'connectDB.php';
extract($_POST);
$conn = new mysqli($lh, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
if (isset($_POST['policy']) &&
    isset ($_POST['username']) &&
    isset ($_POST['accept'])) {
    $policy = get_post($conn, 'policy');
    $username = get_post($conn, 'username');
    $accept = get_post($conn, 'accept');


    $query1 = "UPDATE account set status = 'accepted' where username = '$username';";
    $result1 = $conn->query($query1);
    if (!$result1){
        echo "error connection";
    }else {
        echo "<div class='top center'>";
        echo "<h3>Successfully added $username</h3>";
        echo "<h3>Redirecting in 3 seconds</h3>";
        echo "</div>";

        header('Refresh: 2; URL=FetchDB.php');
    }
    echo "added successfully";

}else echo "KIM";


function get_post($conn, $var)
{
    return $conn->real_escape_string($_POST[$var]);
}

include 'footer.php';

/*echo <<< _END
<!DOCTYPE html>
<body>
<a href="FetchDB.php"> Go back to User</a>

</body>
</html>
_END;*/
