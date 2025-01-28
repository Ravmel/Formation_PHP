<?php
$tab = [
    "user1" => [
        " Achi",
        " Rodrigue",[
            "pays" => " Côte d'Ivoire",[
                "ville" => ["Abidjan", " Agboville"],
                "CMN" => [" Cocody", " Yopougon"],
            ]
        ]
    ]
];

// $ville1 = $tab["user1"][2]["pays"][0]["ville"][0];

echo "Bienvenue Monsieur".$tab["user1"][0].$tab["user1"][1].",";
echo " Vous êtes bien arrivé en".$tab["user1"][2]["pays"].".";
echo " Voulez-vous résider dans la ville d'"."ou d'";

?>