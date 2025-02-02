<?php
echo "MENU DE RESTEAURANT\n";
echo "===================\n";
echo "1 => Boisson alcolisée.\n";
echo "2 => Boisson non alcolisée.\n";
echo "3 => Sucrerie.\n";

$choix = (int)readline("Saisir un numéro : ");

if ($choix == 1) {
    echo "Vous avez choisit $choix : Boisson alcolisée\n";
    echo" Merci pour votre choix.";
} 
elseif ($choix == 2) {
     echo "Vous avez choisit $choix : Boisson non alcolisée\n";
     echo" Merci pour votre choix.";
}
elseif ($choix == 3) {
    echo "Vous avez choisit $choix : Sucrerie\n";
    echo" Merci pour votre choix.";
}
else {
    echo"Vous n'avez pas fait de choix valide !";
}
?>