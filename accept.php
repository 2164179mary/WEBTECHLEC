<<<<<<< HEAD
<?php
require_once 'connectDB.php';
$conn = new mysqli($lh, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
if (isset($_POST['policy']) &&
    isset($_POST['account']) &&
    isset ($_POST['username']) &&
    isset ($_POST['accept']))

{
    $policy = get_post($conn, 'policy');
    $account = get_post($conn, 'account');
    $username = get_post($conn, 'username');
    $accept = get_post($conn, 'accept');

    switch ($account){
        case 'customer':
                $query1 = " UPDATE $account SET status = 'accepted' WHERE customerID = '$username';";
                $result1 = $conn->query($query1);
                if (!$result1) die($conn->error);
            break;


        case 'sp':
                $query1 = " UPDATE $account SET status = 'accepted' WHERE spID = '$username';";
                $result1 = $conn->query($query1);
                if (!$result1) die($conn->error);

            break;

        default:
            echo "Error";
            break;

    }

    echo "added successfully";


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
=======
<?php
require_once 'connectDB.php';
$conn = new mysqli($lh, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
if (isset($_POST['policy']) &&
    isset($_POST['account']) &&
    isset ($_POST['username']) &&
    isset ($_POST['accept']))

{
    $policy = get_post($conn, 'policy');
    $account = get_post($conn, 'account');
    $username = get_post($conn, 'username');
    $accept = get_post($conn, 'accept');

    switch ($account){
        case 'customer':
                $query1 = " UPDATE $account SET status = 'accepted' WHERE customerID = '$username';";
                $result1 = $conn->query($query1);
                if (!$result1) die($conn->error);
            break;


        case 'sp':
                $query1 = " UPDATE $account SET status = 'accepted' WHERE spID = '$username';";
                $result1 = $conn->query($query1);
                if (!$result1) die($conn->error);

            break;

        default:
            echo "Error";
            break;

    }

    echo "added successfully";


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
>>>>>>> ddf19f4b59fc0f7c3114c94c945d7ac58c52cce4
