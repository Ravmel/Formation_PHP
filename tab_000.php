<?php

$tab = [
    "user1" => [
        "nom"     => "Achi",
        "prenom"  => "Rodrigue",
        "details" => [
            "pays"         => "Côte d'Ivoire",
            "localisation" => [
                "ville"   => ["Abidjan", "Agboville"],
                "commune" => ["Cocody", "Yopougon"],
            ],
        ],
    ],
];

// Récupération des informations de l'utilisateur
$nom    = $tab["user1"]["nom"];
$prenom = $tab["user1"]["prenom"];
$pays   = $tab["user1"]["details"]["pays"];
$ville1 = $tab["user1"]["details"]["localisation"]["ville"][0];
$ville2 = $tab["user1"]["details"]["localisation"]["ville"][1];
$cmn1   = $tab["user1"]["details"]["localisation"]["commune"][0];
$cmn2   = $tab["user1"]["details"]["localisation"]["commune"][1];

// Affichage du message de bienvenue
echo "\n";
echo "Bienvenue Monsieur " . $nom . " " . $prenom . "." . "\n";
echo "Nous sommes ravis de vous accueillir en " . $pays . ". " . "\n";
echo "Voulez-vous résider dans la ville d'" . $ville1 . " ou d'" . $ville2 . "? " . "\n";
echo "Si vous choisissez " . $ville1 . ", n'oubliez pas de préciser la commune de " . $cmn1 . " ou de " . $cmn2 . "." . "\n";
echo "Merci et bon séjour en " . $pays . ".";
echo "\n";
echo " ";
