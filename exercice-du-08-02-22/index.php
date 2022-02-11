<?php
function TD(array $s): string{
    $reussi=0;
    $echec=0;
    foreach($s as $cote){
        if($cote>4){
            $reussi=$reussi+1;
        }else{
            $echec=$echec+1;
        };
    };
    if($echec>1){
        return "l'étudiant n'a pas réussi à tous les TD <br>";
    }else{
        return "l'étudiant a réussi à tous les TD <br>";
    };
};

function prixTotal(int $prix, int $qte): int{
    $pt=0;
    if($qte>9){
        $pt=($prix*$qte)-(($prix*10)/10);
        return $pt;
    }else{
        $pt=$prix*$qte;
        return $pt;
    };
};


$a=[8,5,9,8,5,5];
echo TD($a);

echo prixTotal(10,10);
?>