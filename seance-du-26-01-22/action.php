<?php
    $name = $_POST['name'];
    $second_name = $_POST['secondname'];
    $last_name = $_POST['lastname'];
    $matricule = $_POST['Matricule'];
    $genre = $_POST['genre'];
    $promotion = $_POST['Promotion'];
    $email = $_POST['Email'];
    if( $name == ""){
        echo "veuillez inserer votre nom";
    }
    elseif( $second_name == ""){
        echo "veuilez inserer votre postnom";
    }
    elseif( $last_name == ""){
        echo "veuillez inserer votre prenom";
    }
    elseif( $matricule == ""){
        echo "veuilllez inserer votre matricule";
    }
    elseif( $genre == ""){
        echo "veuillez préciser votre genre";
    }
    elseif( $promotion == ""){
        echo "veuillez préciser votre promotion";
    }
    else{
        echo "nom: ".$name."<br> Postnom: ".$second_name."<br> Prenom: ".$last_name."<br> Matricule: ".$matricule."<br> Genre: ".$genre."<br> Promotion: ".$promotion."<br> Email: ".$email;
    };
    
?>