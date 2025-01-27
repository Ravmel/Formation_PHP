<?php
$tab = [
    "user1" => [
        " Achi",
        " Rodrigue",
        [
            "pays" => " Côte d'Ivoire ",
            [
                "ville" => [" Abidjan", " Agboville"],
                "CMN" => [" Cocody", " Yopougon"],
            ]
        ]
    ]
];

echo "Bienvenue Monsieur".$tab["user1"][0].$tab["user1"][1].", 
vous êtes bien arrivé en".$tab["user1"][2]["pays"]." 
Voulez vous résider dans la ville d'".$tab["user1"]["pays"][1]."ou d'".$tab["user1"][2]["pays"].
"Si vous choisissez ".$tab["user1"][2]["pays"]. ",
n'oubliez pas de préciser la commune de ".$tab["user1"][2]["pays"].
" ou de ".$tab["user1"][2]["pays"]."Merci et bon séjour en ".$tab["user1"][2]["pays"].".";


?>