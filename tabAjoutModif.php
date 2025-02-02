<?php 
$tab = [];
$n1 = readline("Note1 : ");
$n2 = readline("Note2: ");
$n3 = readline("Note3: ");

// Methode rapide (AJOUTER)
// $tab["Notes"] = [$n1,$n2,$n3];

// Methode longue (AJOUTER)
$tab["Notes"][]= $n1;
$tab["Notes"][]= $n2;
$tab["Notes"][]= $n3;

// $tab["Notes"] = [
//    10,20,30
// ];

// Pour avoir plus d'information sur une variable ou un élt texte : exple int ou string ...
var_dump($tab);

// (MODIFIER)
$n4 = readline("Note4: ");
$tab["Notes"][1]= $n4;
var_dump($tab);

// SUPRESSION
unset($tab["Notes"][0]);
unset($tab["Notes"][1]);

var_dump($tab);

// print_r($tab);








?>