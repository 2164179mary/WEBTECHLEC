<?php

    include 'header.php';
//session_start();
    include 'requireSession.php';
    if (isset($_SESSION['yes'])) {
        header('Location: exercise.php');
        return;
    }
    require_once 'connectDB.php';
    extract($_POST);
    extract($_GET);
    extract($_SESSION);
    $conn = new mysqli($lh, $un, $pw, $db);
    if ($conn->connect_error) die($conn->connect_error);
    $query = "select * from question where testID = $testID
order by rand()";
    $result = $conn->query($query);
    if (!$result) die($conn->error);
    $rows = $result->num_rows;

    echo "<div class='top'>";
    echo "<form id='questions' method='post' action='checkAnswer.php?testID=$testID'>";
    echo "<ol>";
    for($i = 0; $i < $rows; ++$i){
        $result->data_seek($i);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $id = $row['id'];
        $question = $row['question'];
        $choiceA = $row['choiceA'];
        $choiceB = $row['choiceB'];
        $choiceC = $row['choiceC'];
        $answer = $row['answer'];
        $inputA = "<input type='radio' name='q$id' value='w' required>$choiceA</br></input>";
        $inputB = "<input type='radio' name='q$id' value='w' required>$choiceB</br></input>";
        $inputC = "<input type='radio' name='q$id' value='w' required>$choiceC</br></input>";
        $inputAnswer = "<input id='answer$id' type='radio' name='q$id' value='c' required>$answer</br></input>";
        $choices = array($inputA, $inputB, $inputC, $inputAnswer);
        shuffle($choices);

        echo "<li>";
        echo "<p>$question</p>";
        echo "<div class='q$id'>";
        foreach ($choices as $choice){
            echo <<<_END
        $choice
_END;

        }
        echo "</div>";
        echo "</li>";

    }
    echo "</ol>";
    echo "<div>";
    echo "<button type = 'submit' name = 'log_in_user'>Submit</button>";
include 'footer.php';
?>


