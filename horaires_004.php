<?php
$horaires[] = ["h1Matin", "h1Soir"];

echo "1ère partie : MATINNEE\n";
echo "----------------\n";
echo "Saisir l'heure d'ouverture de la matinée";
echo "\n";
$h1Matin = readline("Heure d'ouverture :");
echo "\n";

echo "Saisir l'heure de fermeture de la matinée\n";
$h1Soir = readline("Heure de fermeture : ");

if ($h1Matin >= $h1Soir) {
    echo "Vous avez entrée une heure d'ouverture invalide !";
} elseif ($h1Matin <= $h1Soir) {
    // echo "vous avez choisit $h1Matin heure comme heure d'ouverture.";
} elseif ($h1Soir >= $h1Matin) {
    echo "Vous avez entrée une heure de fermeture invalide !";
} else {
    echo "vous avez choisit $h1Soir comme heure d'ouverture.";
}
