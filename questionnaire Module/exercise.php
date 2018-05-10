<?php
include 'header.php';
//include 'checkSession.php';
if (!isset($_SESSION['username'])) {
    header('Location: loginForm.php');
}
require_once 'connectDB.php';
$conn = new mysqli($lh, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
$query = "SELECT * FROM test";
$result = $conn->query($query);
if (!$result) die($conn->error);
$rows = $result->num_rows;
echo "<div class='top'>";
echo "<table>";
for($j=0; $j<$rows; ++$j){
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $testID = $row['testID'];
    $testName = $row['testName'];
    echo <<<_END
    <tr>
        <td><a href="checkDone.php?testID=$testID">$testName</a></td>
    </tr>
_END;
}
echo "</table>";
echo "</div>";
include "footer.php";
?>

