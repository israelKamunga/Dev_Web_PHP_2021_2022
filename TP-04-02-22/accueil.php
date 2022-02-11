<?php
    session_start();
    

$nom = $_POST['nom'];
$email = $_POST['email'];
$_SESSION = [[]];

/*$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$user_promotion = $_POST['user_promotion'];
$user_password = $_POST['user_password'];
$user_gender = $_POST['user_gender'];*/
/*$_SESSION['nom']=[];
$_SESSION['email']=[];
$_SESSION['promotion']=[];
$_SESSION['mot_de_passe']=[];
$_SESSION['genre']=[];*/
//$_SESSION = ['nom'=>[$nom],'email'=>[$email],'promotion'=>[$promotion],'mot_de_passe'=>[$mot_de_passe],'genre'=>[$genre]];
//echo '<h1>PROFIL<h1><br>nom : '.$_SESSION['nom'][0].'<br>email : '.$_SESSION['email'][0].'<br>Promotion : '.$_SESSION['promotion'][0];

/*if(in_array($mot_de_passe, $_SESSION['password'] && in_array($email, $_SESSION['email']))){
    echo '<h1>PROFIL<h1><br>nom : '.$_SESSION['nom'][].'<br>email : '.$_SESSION['email'][0].'<br>Promotion : '.$_SESSION['promotion'][0];
}else{
    header('Location: index.php');

};*/
if($_POST['user_name']==null OR $_POST['user_email']==null OR $_POST['user_password']==null){
    header('Location: index.php');
}elseif(in_array());
