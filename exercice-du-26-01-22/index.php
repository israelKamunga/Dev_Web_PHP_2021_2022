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
    <form action="action.php" method="POST">
        <div id="conteneur">
  Articles: <select name="article" id="">
                <option value="banane">banane</option>
                <option value="orange">orange</option>
                <option value="pain">pain</option>
                <option value="pizza">pizza</option>
            </select><br>
  Quantité: <input type="number" name="qte"><br>
            <input type="submit" value="valider">
        </div>
    </form>
</body>
</html>