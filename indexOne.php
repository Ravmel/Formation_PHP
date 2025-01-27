<?php
// $nom = readline("Entrée votre nom : ");
// $prenoms = readline("Entrée votre prénoms : ");
// $age = readline("Entrée votre âge : ");
// echo ("Bonjour $nom $prenoms vous avez $age");

// $fruits = ["Pomme","Banane","Mangue: ","Papaye","1.",1,2,3,4];
// echo "$fruits[4]$fruits[2]$fruits[6]";
// print_r($fruits);
// var_dump(4);

$moyenne = [
    "nomMatière" => "Maths",
    "N1" => 18,
    "N2" => 17,
    "N3" => 12,
    "N4" => 18.5,
    "N5" => 20,
];

echo "Matière : ".$moyenne['nomMatière']."\n";
echo "================\n";
echo "Note 1 : ".$moyenne['N1'];

// $newTableau=[
//     "N1" => "none",
//     "N2" => [10,20,30, ["Marc",[" Melagne"]]]
// ];

// echo $newTableau["N2"][3][0];
// echo $newTableau["N2"][3][1][0];


?>