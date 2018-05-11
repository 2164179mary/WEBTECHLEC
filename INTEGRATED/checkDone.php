<?php
include 'header.php';
include 'requireSession.php';
extract ($_GET);

require_once 'connectDB.php';
$username = $_SESSION['username'];
$conn = new mysqli($lh, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
$query = "select * from result where username = '$username' and testID = '$testID'";
$result = $conn->query($query);
if (!$result) die($conn->error);
$rows = $result->num_rows;
/*echo <<<_END
<div class='top'>
 <p>Rows: $rows</p>
</div>
_END;*/

if($rows == 1){
    $result->data_seek(0);
    $row = $result->fetch_array(MYSQLI_ASSOC);

    echo "<div class='top'>";
    echo "<p>You have already answered the exam</p>";
    echo "Score: ". $row['score']."/".$row['total']."</br>";
    $total = $row['total'];
    //echo "<a href='viewAnswers.php?testID=$testID'>View Your Answer</a></br>";
    echo "<a href='viewRanks.php?testID=$testID&total=$total'>View Ranks</a>";
    echo "</div>";
    include 'footer.php';
} else {
    header("Location: question.php?testID=$testID");
}
/*require_once 'connectDB.php';
$username = $_SESSION['username'];
$conn = new mysqli($lh, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
$query = "select * from result where username = $username and testID = $testID";
$result = $conn->query($query);
if (!$result) die($conn->error);
$rows = $result->num_rows;

if($rows >= 1){
    echo "<div class='top'>";
    echo "<p>You have already answered the exam</p>";
    echo "<a href='viewAnswer.php'>View Your Answer</a>";
    echo "</div>";
} else {
    header("./question.php");
}*/

?>