<?php
$tab          = [];
$quelquechose = true;

while (true) {
    if ($quelquechose == true) {
        echo "\n";
        echo "MATIN\n";
        echo "-------";
    } else {
        echo "\n";
        echo "SOIR\n";
        echo "-------";
    }

    echo "\n";
    $h1M = readline("Inserrez l'heure d'ouverture : ");
    $h2M = readline("Inserrez l'heure de fermeture : ");

    if ($h1M >= $h2M) {
        echo "L'heure de fermeture n'est pas valable. Ressayez!";
        echo "\n";

    } else {
        if ($quelquechose == false) {
            if (
                $tab[0][0] >= $h1M ||
                $tab[0][1] >= $h1M ||
                $tab[0][0] >= $h2M ||
                $tab[0][1] >= $h2M
            ) {
                echo "\n";
                echo "Oops! Il semble que vous ayez saisi une ou plusieurs valeurs incorrectes.\n";
                echo "Pourriez-vous vérifier et réessayer, s'il vous plaît? 😞\n";
                echo "\n";
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

echo "\n 😊 Merci vos informations ont été bien enregistrées. 😊\n";
echo "\n--------------------------------------------------------------- \n";
echo "Bonjour cher client.\n";

$heureDeVisite = readline("Entrer l'heure de votre visite : ");
echo "\n";

$ouvert = true;
foreach ($tab as $horaire) {
    if ($heureDeVisite >= $horaire[0] && $heureDeVisite <= $horaire[1]) {
        $ouvert = false;
        break;
    }
}

if ($ouvert == true) {
    echo "Nous sommes désolés, nous serons déjà fermés à cette heure.\n";
    echo "Merci de votre compréhension.\n";
    echo "\n";
} else {
    echo " -- Merci --\n";
    echo "\n";
    echo "Aujourd'hui à $heureDeVisite heure, nous serons ravis de vous voir.\n ";
}
// echo "\n";
// var_dump($tab);
// echo "\n";
// echo "\n";
// print_r($tab);
// echo "\n";
