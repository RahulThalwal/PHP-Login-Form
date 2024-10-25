<?php 
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="form">
    <h2>Login Form</h2>
    <form name="form" action="login.php" method="post">
        <label> Username: </label>
        <input type="text" name="user" id="user" autocomplete="off"><br><br>
        <label> Password: </label>
        <input type="password" id="pass" name="pass"><br><br>
        <input type="submit" id="btn" value="Login" name="submit" autocomplete="new-password">
    </form>
</div>
</body>
</html>
