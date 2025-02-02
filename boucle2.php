<?php
$tab = [];

while (true) {

$a = readline("Entrez une première note : ");
$b = readline("Entrez une deuxième note : ");

if ($a>$b) {
    echo '$a est supérieur à $b';
    break;
}
elseif ($a<$b){
    echo '$b est supérieur à $a';
    break;
}

echo"Vous avez saisie deux valeurs identiques\n";
$tab[] = [$a,$b];
}

var_dump($tab);
?>