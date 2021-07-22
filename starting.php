<?php
    require_once ('constants.php');
    session_start();
    if(isset($_SESSION['user_id'])) {
        header('Location: '.SRC_URL);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Login Page</title>
    <link type="text/css" rel="stylesheet" href="./css/common.css"/>
    <link type="text/css" rel="stylesheet" href="./plugins/materialize/css/materialize.min.css"/>
</head>
<body>
<div class="loginMainDiv">
    <h2>Login Form</h2>
     <form action="services/logincheck.php" method="post" class="loginForm">
        <div class="center">
            <div class="card">
                <div class="cointainer">
                    <label for="email"><b>E-mail</b></label>
                    <input class="inputText" id="email" type="text" placeholder="Enter E-Mail" name="email">
                </div>
                <div class="cointainer">
                    <label for="password"><b>Password</b></label>
                    <input class="inputText" id="password" type="password" placeholder="Enter Password" name="password">
                    <div class="cointainer">
                        <div class="button">
                            <button type="submit">Login</button>
                        </div>
                        <div class="cointainer"></div>
                        <a href="register.php">register</a>
                    </div>
                </div>									     <div class="cointainer" style="background-color: bisque">
                    <button type="button" class="cancelbutton">Cancel</button>&nbsp;
                    <a href="#">forgot password?</a>
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>
