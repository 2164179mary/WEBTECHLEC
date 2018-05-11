<?php
include 'header.php';
include 'requireSession.php';
extract ($_GET);

/*echo <<<_END
<div class='top'>
 <p>testID: $testID</p>
</div>
_END;*/

require_once 'connectDB.php';
$username = $_SESSION['username'];
$conn = new mysqli($lh, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
$query = "select * from result where testID = '$testID' ORDER BY score DESC";
$result = $conn->query($query);
if (!$result) die($conn->error);
$rows = $result->num_rows;

echo "<div class='top'>";
echo "Total: $total";
echo "<table class='rank'>";
echo <<<_END
<tr>
    <td>Rank</td>
    <td>Username</td>
    <td>Score</td>
</tr>
_END;

for($i = 0; $i < $rows; ++$i){
    $result->data_seek($i);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $username = $row["username"];
    $score = $row['score'];
    $rank = $i+1;
    echo <<<_END
<tr>
    <td>$rank</td>
    <td>$username</td>
    <td>$score</td>
</tr>
_END;
}
echo "</table>";
echo "</div>";
include 'footer.php';
?>