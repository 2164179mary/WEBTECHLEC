<?php
require_once 'connectDB.php';
$conn = new mysqli($lh, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
if (isset($_POST['policy']) &&
    isset($_POST['account']) &&
    isset ($_POST['username']) &&
    isset ($_POST['deny']))

{
    $policy = get_post($conn, 'policy');
    $account = get_post($conn, 'account');
    $username = get_post($conn, 'username');
    $deny = get_post($conn, 'deny');

    switch ($account){
        case 'customer':
            $query1 = "DELETE from $account WHERE customerID = '$username';";
            $result1 = $conn->query($query1);
            if (!$result1) die($conn->error);
            break;


        case 'sp':
            $query1 = "DELETE from $account WHERE spID = '$username';";
            $result1 = $conn->query($query1);
            if (!$result1) die($conn->error);

            break;

        default:
            echo "Error";
            break;

    }

    echo "deleted successfully";


}


function get_post($conn, $var)
{
    return $conn->real_escape_string($_POST[$var]);
}

echo <<< _END
<!DOCTYPE html>
<body>
<a href="FetchDB.php"> Go back to User</a>

</body>
</html>
_END;