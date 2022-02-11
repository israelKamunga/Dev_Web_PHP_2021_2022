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
    <link rel="stylesheet" href="design.css">
</head>
<body>
    <div id="principal">
        <form action="accueil.php" method="POST">
            <div id="login"><label for="">Login :</label><input type="email" name="" id=""></div>
            <div id="login"><label for="">mot de passe :</label><input type="password" name="mdp" id=""></div>
            <div id="bouton"><button type="submit">Se connecter</button></div>
        </form>
    </div>
</body>
</html>
