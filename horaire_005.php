<?php
$tab          = [];
$quelquechose = true;

while (true) {
    if ($quelquechose == true) {
        echo "MATIN";
    } else {
        echo "SOIR";
    }

    echo "\n";
    $h1M = readline("Inserrez l'heure d'ouverture : ");
    $h2M = readline("Inserrez l'heure de fermeture : ");

    if ($h1M >= $h2M) {
        echo "L'heure d'ouverture n'est pas valable. Ressayez!";
        echo "\n";

    } else {
        if ($quelquechose == false) {
            if (
                $tab[0][0] >= $h1M
                || $tab[0][1] >= $h1M
                || $tab[0][0] >= $h2M
                || $tab[0][1] >= $h2M
            ) {
                echo "Attention vs avez saisi une valeur erronné \n";
            } else {
                $tab[] = [$h1M, $h2M];
                break;
            }
        } else {
            $tab[]        = [$h1M, $h2M];
            $quelquechose = false;
        }

    }
}
echo "Merci vos informations ont été bien enregistrées.\n";
echo "\n";
// print_r($tab);
