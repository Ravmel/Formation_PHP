<?php
$a = readline("Entrez une première note : ");
$b = readline("Entrez une deuxième note : ");

if ($a>$b) {
    echo '$a est supérieur à $b';
}
elseif ($a<$b){
    echo '$b est supérieur à $a';
}
else {
    echo"Vous avez saisie deux valeur identique\n";
    $a = readline("Entrez une première note : ");
    $b = readline("Entrez une deuxième note : ");
    if ($a>$b) {
        echo '$a est supérieur à $b';
    }
    elseif ($a<$b){
        exit;
        echo '$b est supérieur à $a';
    }
    else {
        echo"Vous avez saisie deux valeur identique\n";
        
        $a = readline("Entrez une première note : ");
        $b = readline("Entrez une deuxième note : ");
    }
}


?>