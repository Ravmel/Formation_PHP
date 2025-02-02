<?php
$heureDouverture = (int) readline("Saisir une heure d'ouverture (Exemple: 07h00) : ");
echo "\n";
$heureDeFermeture = (int) readline("Saisir une heure de fermeture (Exemple: 18h30) : ");
echo "\n";

if ($heureDouverture < $heureDeFermeture) {
    echo "Vous avez saisie : $heureDouverture comme heure de début et $heureDeFermeture comme heure de fin.\n";
    echo "\n";
} else {
    echo "NB: L'heure de d'ouverture doit être supérieur à l'heure d'ouverture\n ";
    echo "\n";
}

$heureDeVisite = (int) readline("Saisir une heure de visite (Exemple: 10h00) : ");
echo "\n";

if ($heureDeVisite > $heureDouverture && $heureDeVisite < $heureDeFermeture) {
    echo "$heureDeVisite est valable pour une visite.\n";
    echo "\n";
} else {
    echo "$heureDeVisite n'est pas valable pour une visite. Le magasin sera deja fermé!\n";
}
