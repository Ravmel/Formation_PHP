<?php

$tab = [
    "user1" => [
        "nom" => "Achi",
        "prenom" => "Rodrigue",
        "details" => [
            "pays" => "Côte d'Ivoire",
            "localisation" => [
                "ville" => ["Abidjan", "Agboville"],
                "CMN" => ["Cocody", "Yopougon"]
            ]
        ]
    ]
];

// Récupération des informations de l'utilisateur
$nom = $tab["user1"]["nom"];
$prenom = $tab["user1"]["prenom"];
$pays = $tab["user1"]["details"]["pays"];
$ville1 = $tab["user1"]["details"]["localisation"]["ville"][0];
$ville2 = $tab["user1"]["details"]["localisation"]["ville"][1];
$cmn1 = $tab["user1"]["details"]["localisation"]["CMN"][0];
$cmn2 = $tab["user1"]["details"]["localisation"]["CMN"][1];

// Affichage du message de bienvenue
echo "Bienvenue Monsieur " . $nom . " " . $prenom . ", vous êtes bien arrivé en " . $pays . ". ";
echo "Voulez-vous résider dans la ville de " . $ville1 . " ou de " . $ville2 . "? ";
echo "Si vous choisissez " . $ville1 . ", n'oubliez pas de préciser la commune " . $cmn1 . " ou " . $cmn2 . ". ";
echo "Merci et bon séjour en " . $pays . ".";

?>
