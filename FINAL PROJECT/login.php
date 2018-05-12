<?php

//connect database
//include 'requireSession.php';
require_once 'connectDB.php';
$conn = new mysqli($lh, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

//Get the input value from the form
$username = $_POST['username'];
$password = $_POST['password'];

$username = mysqli_real_escape_string($conn,$username);
$password = mysqli_real_escape_string($conn,$password);

$query = "SELECT username, password, type, status from account where username = '$username' and password = '$password'";
$result = $conn->query($query);

//if count is equal 1, register the user to logged in
$count = mysqli_num_rows($result);

for($i = 0; $i < $count; $i++){
    $result->data_seek($i);
    $row = $result->fetch_array(MYSQLI_ASSOC);

    $_type = $row['type'];
    $_status = $row['status'];
}
if ($count == 1){

    if($_type == "admin"){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['admin'] = 'admin';
        header('location: index.php');
    } else if($_type == "member"){
        if($_status == 'pending'){
            include ('header.php');
            echo "<div class='top center'>";
            echo "<h3>Please wait for the administrator to accept your account</h3>";
            echo "<h3>redirecting in 3 seconds </h3>";
            echo "</div>";
            header('Refresh: 3; URL=loginForm.php');
            include "footer.php";
        }else {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            /*echo $_SESSION['username'];
            echo $_SESSION['password'];*/
            header('location: index.php');

        }
        //header('Refresh: 3; URL=../login.html');
    }
    //  echo "You are now logged in";

}
else {
    //header("location:../login.html");
    include ('header.php');
    echo "<div class='top center'>";
    echo "<h3> Invalid username or password </h3>";
    echo "<h3>redirecting in 3 seconds </h3>";
    echo "</div>";
    header('Refresh: 3; URL=loginForm.php');
    include ('footer.php');
}
?>
