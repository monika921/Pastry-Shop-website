<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login and Registration System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ruslan+Display&display=swap" rel="stylesheet">
</head>
<body>
    <script src="https://kit.fontawesome.com/5a9f06ed99.js" crossorigin="anonymous"></script>   
    <br/>
    <div class="header">
        <h2>Login Here!</h2>
    </div>
    <form method="POST" action="login.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Enter Username</label>
            <input type="text" name="username" >
        </div>
        <div class="input-group">
            <label>Enter Password</label>
            <input type="password" name="password" >
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_user">LogIn</button>
        </div>&nbsp;
    <p>
        New Here?
        <a href="register.php"> Click here to register!</a>
    </p>
    <p align="right"><a href="Main.html"><i class="fa fa-sign-in" aria-hidden="true"></i> Walk out on</a></p>
    <!--?php include "redirect.php"; ?-->
    </form>
    <img src="http://2.bp.blogspot.com/-IOVjS9ECNwk/XtJ6FVKIstI/AAAAAAAAbFk/K5t9qnUCOscflEyEs7advAQFcN5yOW7RQCK4BGAYYCw/s400/Colorful%2BHealthy%2BFood%2BQuote%2BFacebook%2BCover%2B%25288%2529.png"
    width="30%">
</body>
</html>