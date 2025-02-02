<?php
$tab = [
    "user1" => [
        "Achi",
        "Rodrigue",
        [
            "pays" => "Côte d'Ivoire",
            [
                "ville" => ["Abidjan", "Agboville"],
                "CMN" => ["Cocody", "Yopougon"],
            ]
        ]
    ]
];

echo "\n";
echo "Bienvenue Monsieur ".$tab["user1"][0]." ".$tab["user1"][1].","."\n";
echo "\n";
echo "Nous sommes ravis de vous accueillir en ".$tab["user1"][2]["pays"]."."."\n";
echo "\n";
echo "Souhaitez-vous résider dans la ville d'".$tab["user1"][2][0]["ville"][0]." ou d'".$tab["user1"][2][0]["ville"][1]." ?"."\n";
echo "\n";
echo "Si vous choisissez ".$tab["user1"][2][0]["ville"][0].", veuillez préciser la commune de ".$tab["user1"][2][0]["CMN"][0]." ou de ".$tab["user1"][2][0]["CMN"][1].".\n";
echo "\n";
echo "Merci et bon séjour en ".$tab["user1"][2]["pays"].".";
echo "\n";
echo " ";

?>