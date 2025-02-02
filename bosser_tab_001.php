<?php
$tab = [
    "user1" => [
        "Achi",
        "Rodrigue",
        [
            "pays" =>
            "Côte d'Ivoire",
            [
                "ville"   => [
                    "Abidjan",
                    "Agboville",
                ],

                "commune" => [
                    "Cocody",
                    "Yopougon",
                ],
            ],
        ],
    ],
];

echo "\n";
echo "Bonjour M." . $tab["user1"][0] . " " . $tab["user1"][1] . ".\n";
echo "Bienvenue en " . $tab["user1"][2]["pays"] . ".\n";
echo "Voulez vous résider dans la ville d'" . $tab["user1"][2][0]["ville"][0] . " ou " . $tab["user1"][2][0]["ville"][1] . "?\n";
echo "Si vous  choisissez " . $tab["user1"][2][0]["ville"][0] . ", n'oubliez pas de préciser la commune de " . $tab["user1"][2][0]["commune"][0] . " ou de " . $tab["user1"][2][0]["commune"][1] . ".\n";
echo "Merci et bon séjour en " . $tab["user1"][2]["pays"] . ".\n";
echo "\n";
