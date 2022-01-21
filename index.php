<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
      <form action="Controller/Controller.php" method="POST">
        Nom: <input type="type" placeholder="tapez votre nom" name="name"><br>
        PostNom : <input type="text" placeholder="tapez votre PostNom" name="secondname"><br>
        Prenom : <input type="text" placeholder="tapez votre Preom" name="lastname"><br>
        Matricule : <input type="text" placeholder="tapez votre Matricule" name="Matricule"><br>
        Genre : <select name="genre" id="">
          <option value="Homme">Masculin</option>
          <option value="Femme">Feminin</option>
        </select><br>
        Promotion : <input type="text" placeholder="tapez votre Promotion" name="Promotion"><br>
        Email : <input type="email" placeholder="tapez votre adresse mail" name="Email"><br>
        <button type="submit" value="submit">soumettre</button>
      </form>
</body>
</html>