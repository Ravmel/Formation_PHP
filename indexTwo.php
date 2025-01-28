<?php
$tab = [
    "user1" => [
        " Achi",
        " Rodrigue",[
            "pays" => "Côte d'Ivoire",[
                "ville" => ["Abidjan", " Agboville"],
                "CMN" => [" Cocody", " Yopougon"],
            ]
        ]
    ]
];

echo "\n";
echo "Bienvenue Monsieur".$tab["user1"][0].$tab["user1"][1].","."\n";
echo "\n";
echo "Nous sommes ravis de vous accueillir en ".$tab["user1"][2]["pays"]."."."\n";
echo "\n";
echo "Souhaitez-vous résider dans la ville d'"."........."." ou d'"."........."."?"."\n";
echo "\n";
echo "Si vous optez pour ".".........".", veuillez préciser la commune de "."........."." ou de "."........."."\n";
echo "\n";
echo "Merci et bon séjour en ".$tab["user1"][2]["pays"].".";
echo "\n";
echo " ";

?>