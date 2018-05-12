<?php
include 'header.php';
if (isset($_SESSION['username'])) {
    header('Location: index.php');
    return;
}
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale = 1.0">
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
        <title>Login module</title>
    </head>

    <body>
        <div class="container">
            <div class="content">
                <div class="top">
                    <div class="col-12">
                        <form method="post" action="login.php" class="loginn">
                            <p>Username:</p>
                            <input type="text" name="username"><br>
                            <p>Password:</p>
                            <input type="password" name="password">
                            <div>
                                <br>
                                <button type="submit" name="log_in_user"> Log in </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="content">
                    <p>&copy;<i> Copyright 2018. <a href="index.html"><b> CourseNotes</b></a>. All Rights Reserved.</i></p>
                </div>
            </div>
        </footer>
    </body>

    </html>
