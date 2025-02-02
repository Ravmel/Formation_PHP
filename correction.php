<?php
$tab          = [];
$quelquechose = true;

while (true) {
    if ($quelquechose) {
        echo "\nMATIN\n-----\n";
    } else {
        echo "\nSOIR\n-----\n";
    }

    $h1M = readline("Inserrez l'heure d'ouverture : ");
    $h2M = readline("Inserrez l'heure de fermeture : ");

    if ($h1M >= $h2M) {
        echo "L'heure de fermeture n'est pas valable. Ressayez!\n";
    } else {
        if (! $quelquechose) {
            if (
                $tab[0][0] >= $h1M ||
                $tab[0][1] >= $h1M ||
                $tab[0][0] >= $h2M ||
                $tab[0][1] >= $h2M
            ) {
                echo "\nOops! Il semble que vous ayez saisi une ou plusieurs valeurs incorrectes.\n";
                echo "Pourriez-vous vérifier et réessayer, s'il vous plaît? 😞\n\n";
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

echo "\n😊 Merci, vos informations ont été bien enregistrées. 😊\n";
echo "\n---------------------------------------------------------------\n\n";
echo "Bonjour cher client.\n";

$heureDeVisite = readline("Entrer l'heure de votre visite : ");
echo "\n";

$ouvert = false;
foreach ($tab as $horaire) {
    if ($heureDeVisite >= $horaire[0] && $heureDeVisite <= $horaire[1]) {
        $ouvert = true;
        break;
    }
}

if (! $ouvert) {
    echo "Nous sommes désolés, nous serons déjà fermés à cette heure.\n";
    echo "Merci de votre compréhension.\n\n";
} else {
    echo " -- Merci --\n";
    echo "Aujourd'hui à $heureDeVisite heure, nous serons ravis de vous voir.\n";
}

// echo "\n";
// var_dump($tab);
// echo "\n";
// print_r($tab);
// echo "\n";
