<?php
session_start();
$nom = $_GET['login'];
$mdp = $_GET['mdp'];
$_SESSION['identifiant'] = 'israelkamunga@gmail.com';
$_SESSION['motdepasse'] = 'israelkamunga';
if($nom == $_SESSION['identifiant'] && $mdp == $_SESSION['motdepasse']){
    echo 'bienvenu '.$nom;
}elseif($nom == "" and $mdp == ""){
    echo 'veuillez remplir les données de connexion <br><a href="index.php"><input type="submit" value="réessayer"></a>';
}
elseif($nom != $_SESSION['identifiant'] && $mdp != $_SESSION['motdepasse']){
    echo 'vos identifiants sont incorrects <br><a href="index.php"><input type="submit" value="réessayer"></a>';
    
}
elseif($nom == $_SESSION['identifiant'] && $mdp != $_SESSION['motdepasse']){
    echo 'votre mot de passe est incorrect <br><a href="index.php"><input type="submit" value="réessayer"></a>';
}else{
    echo 'votre identifiant est incorrect <br><a href="index.php"><input type="submit" value="réessayer"></a>';
    
};