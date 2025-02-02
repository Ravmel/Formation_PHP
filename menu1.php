<?php
echo "MENU DE RESTEAURANT\n";
echo "===================\n";
echo "1 => boisson alcolisée\n";
echo "2 => boisson non alcolisée\n";
echo "3 => sucrerie\n";

$choix = (int)readline("Saisir le numéro de votre choix : ");

switch ($choix) {
    case 1:
        echo "Votre boisson alcolisé vous sera servie dans un instant.\n";
        break;

    case 2:
        echo "Votre boisson non alcolisé vous sera servie dans un instant.\n";
        break;

    case 3:
        echo "Votre sucrerie vous sera servie dans un instant.\n";
        break;
    
    default:
        echo "Entrez un numéro valide s'il vous plaît !\n";
        break;
}





?>