<?php
    $name = $_POST['name'];
    $second_name = $_POST['secondname'];
    $last_name = $_POST['lastname'];
    $matricule = $_POST['Matricule'];
    $genre = $_POST['genre'];
    $promotion = $_POST['Promotion'];
    $email = $_POST['Email'];
    echo 'nom : '.$name.'<br>postnom : '.$second_name.'<br>prenom : '.$last_name.'<br>matricule : '.$matricule.'<br>genre : '.$genre.'<br>promotion : '.$promotion.'<br>email : '.$email;
    
?>