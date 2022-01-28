<?php
    $article = $_POST['article'];
    $qte = $_POST['qte'];
    $pu = array('banane' => 1000, 'orange' => 1500, 'pain' => 2000, 'pizza' => 5000);
    
    foreach($pu as $produit){
        if($produit==$pu[$article]){
            $total = $qte*$produit;
            echo 'Article : '.$article.'<br> Quantité : '.$qte.'<br>Total : '.($qte<0?'0':$total).'FC';
            break;
        }
        else{
            continue;
        }
    }
?>