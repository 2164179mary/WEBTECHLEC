<?php
session_start();

//connect database
require_once 'connectDB.php';
$conn = new mysqli($lh, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

//Log in still with error wait for the update later

if($_SERVER["REQUEST_METHOD"] == "POST"){
    /** @var TYPE_NAME $username */
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    
    $query = "SELECT username, password from account where username = '$username' and password = '$password';
    $Result =  mysqli_query($conn, $query);
    $row = mysqli_fetch_array($Result, MYSQLI_ASSOC);
    
 
      
      $count = mysqli_num_rows($Result);
		
      if($count == 1) {
         session_register("username");
         $_SESSION['login_in_user'] = $username;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
}
    
?>
