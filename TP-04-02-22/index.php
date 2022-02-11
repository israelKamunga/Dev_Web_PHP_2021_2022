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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="principal">
        <div id="corps">
            <form action="accueil.php" method="POST">
                <div><label for="">Nom</label><input type="text" name="user_name"></div><br>
                <div><label for="">Email</label><input type="email" name="user_email" id=""></div><br>
                <div><label for="">Promotion</label><input type="text" name="user_promotion"></div><br>
                <div><label for="">Mot de passe</label><input type="password" name="user_password" id=""></div><br>
                <div><label for="">Genre</label><select name="user_gender" id="">
                    <option value="homme" name="genre">homme</option>
                    <option value="femme" name="genre">femme</option>
                </select></div><br>
                <button type="submit">s'inscrire</button>
            </form>
        </div>
    </div>
    </body>
</html>