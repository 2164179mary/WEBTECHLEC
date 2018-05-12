<?php
include 'header.php';
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale = 1.0">
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
        <title>Signup module</title>
    </head>

    <body>
        <div class="container">
            <div class="content">
                <div class="topp">
                    <div id="divForm">
                        <form id="sign" action="signup.php" method="post">
                            <p>Username:</p>
                            <input type="text" name="username" required="" oninvalid="this.setCustomValidity('Please Enter a valid username')" oninput="setCustomValidity('')">
                            <span id="errorUsername" style="color:#ef5350;font-style:italic;">Username unavailable</span>
                            <p>Password:</p>
                            <input id="password" type="password" name="password" required="" oninvalid="this.setCustomValidity('Please Enter a valid password')" oninput="setCustomValidity('')">
                            <p>Confirm Password:</p>
                            <input id="confirmPassword" type="password" name="Cpassword" required="" oninvalid="this.setCustomValidity('Please Enter a valid password')" oninput="setCustomValidity('')">
                            <span id="ePassword" class="errorPassword" style="color:#ef5350;font-style:italic;">Please confirm your password</span>
                            <p>First name:</p>
                            <input type="text" name="firstName" required="" oninvalid="this.setCustomValidity('Please Enter your first name')" oninput="setCustomValidity('')">
                            <p>Last name:</p>
                            <input type="text" name="lastName" required="" oninvalid="this.setCustomValidity('Please Enter your last name')" oninput="setCustomValidity('')">

                            <div id="center">
                                <input type="submit" value="Sign up" id="center">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div id="result"></div>
        </div>

        <script type="text/javascript" src="script/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="script/script.js"></script>


    </body>

    </html>
    <?php
include 'footer.php';
?>
