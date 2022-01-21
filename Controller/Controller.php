<?php
    $name = $_POST['name'];
    $second_name = $_POST['secondname'];
    $last_name = $_POST['lastname'];
    $matricule = $_POST['Matricule'];
    $genre = $_POST['genre'];
    $promotion = $_POST['Promotion'];
    $email = $_POST['Email'];
    echo "nom: ".$name."<br> Postnom: ".$second_name."<br> Prenom: ".$last_name."<br> Matricule: ".$matricule."<br> Genre: ".$genre."<br> Promotion: ".$promotion."<br> Email: ".$email;
    
?>