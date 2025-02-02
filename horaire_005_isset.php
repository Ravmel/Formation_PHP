<?php
$tab = [];

while (true) {

    if (isset($tab[0])) {
        echo "Soir";
    } else {
        echo "Matin";
    }

    echo "\n";
    $h1M = readline("Inserrez l'heure d'ouverture : ");
    $h2M = readline("Inserrez l'heure de fermeture : ");

    if ($h1M >= $h2M) {
        echo "L'heure d'ouverture n'est pas valable. Ressayez!";
        echo "\n";
    } else {
        $tab[] = [$h1M, $h2M];
    }
    if (isset($tab[1])) {
        break;
    }

}
var_dump($tab);
