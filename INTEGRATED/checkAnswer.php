<?php
$score = 0;
include 'header.php';
//session_start();
include 'requireSession.php';
//$_SESSION['answered'] = "yes";
require_once 'connectDB.php';
$conn = new mysqli($lh, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
extract ($_POST);
extract ($_GET);
$_SESSION['testID'] = $testID;
/*echo "<div class='top'>";
echo $_SESSION['testID'];
echo "</div>";*/
$query = "select * from question where testID=$testID";
$result = $conn->query($query);
if (!$result) die($conn->error);
$rows = $result->num_rows;

for($i = 0; $i < $rows; ++$i){
    $result->data_seek($i);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $question = "q".$row['id'];
    //echo $row['id'];
    if(isset($_POST["$question"])){
        $answer = $_POST["$question"];
        if($answer == 'c'){
            $score++;
        }
    }
}
echo "<div class='top'>";
//echo $_SESSION['answered'];
echo <<<_END
<p id = "results">You got a score of $score out of $rows</p>
_END;

if(isset($_SESSION['username']) &&
    isset($score)&&
    isset($testID)){
    $username = $_SESSION['username'];

    $_query = "INSERT INTO result (username, testID, score, total)
VALUES ('$username', '$testID', '$score', '$rows')";
    $_result = $conn->query($_query);
}
echo "</div>";
$_SESSION['yes'] = "yes";
include 'footer.php';
?>


