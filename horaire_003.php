<?php
$horaires = [
    "hDouverture" => "08h00",
    "hFermeture"  => 18,
];

$heureDouverture  = readline("Saisir une heure d'ouvertue. Exemple (08h00) : ");
$heureDeFermeture = readline("Saisir une heure de fermeture. Exemple (18h00) : ");
// echo "\n";
// echo readline("Saisir une heure de fermeture : ");
// echo "\n";
// echo readline("Saisir une heure de visite : ");
echo "\n";

if ($heureDouverture >= $horaires["hDouverture"]) {
    echo "Vous avez saisi $heureDouverture comme heure de d'ouverture.";
} elseif ($heureDouverture <= $horaires["hDouverture"]) {
    echo "L'heure d'ouverture doit être au dessus de " . $horaires["hDouverture"] . ".\n";
    echo "Veillez saisir une heure d'ouverture valable !";
} else {
    echo "Saisissez une heure valable";
}
