<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="action.php" method="GET">
        login : <input type="mail" name="login"><br>
        mot de passe : <input type="password" name="mdp"><br>
        <input type="submit" value="se connecter">
    </form>
</body>
</html>