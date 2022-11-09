<?php
error_reporting(0);
session_start();

if(isset($_SESSION['username'])){
    header('Location:admin.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" constant="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Login Page</title>
</head>
<body>
    <div class="kotak_login">
    <h2 class="tulisan_login">LOGIN</h3>
    <form action="index.php" method="POST">
        <label for="username">Username</label>
        <input name="username" type="text" class="form_login" placeholder="Masukan username anda ....">
        <br/>
        <label for="password">Password</label>
        <input name="password" type="password" class="form_login" placeholder="Masukan password anda ....">
        <br/>
        <input type="submit" name="submit" value="Login" class="login">
    </form>
    </div>
</body>
</html>