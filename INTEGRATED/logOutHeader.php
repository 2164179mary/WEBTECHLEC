<!DOCTYPE html>
<html lang="en">

<head>
    <title>CourseNotes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" type="text/css" href="./styles/styles.css">
</head>

<body>
<header>
    <div class="container">
        <div class="content">
            <div class="logo">
                <img alt="logo" src="images/CourseNotes%20Logo%20.png">
            </div>
            <div class="nav-menu right">
                <nav class="login">
                    <ul>
                        <?php
                        $username = $_SESSION["username"];
                        echo "<li>$username</li>";
                        echo "<li><a href='logout.php'>Log out</a></li>";
                        ?>
                    </ul>
                </nav>
            </div>
            <div class="nav-menu right">
                <nav class="menus">
                    <ul>
                        <li><a href="index.php"><img src="./images/home.png">Home</a></li>
                        <li><a href="topics.php"><img src="./images/pin.png">Topics</a></li>
                        <li><a href="exercise.php"><img src="./images/mind.png">Exercises</a></li>
                        <li><a href="AboutUs.php"><img src="./images/group.png">About Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

</body>

</html>