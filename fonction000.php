<?php
//1.Créer une fonction
/*
    function monMessage()
    {
        echo "Bienvunue.";
    }
*/

//2.Appeler une fonction
/*
    function monMessage()
    {
        echo "Bienvunue.";
    }
    echo monMessage();
*/

//3.Arguments de fonction PHP
/*
    function nomDeFamille($nom)
    {
        echo "$nom";
    }
    nomDeFamille("Melagne\n");
    nomDeFamille("Ochou\n");
    nomDeFamille("Achi\n");
*/

//4.Fonction avec deux arguments
/*
    function nomDeFamilleEtAge($nom, $age)
    {
        echo "$nom $age";
    }
    nomDeFamilleEtAge("Ariane", "2012\n");
    nomDeFamilleEtAge("Israël", "2018\n");
    nomDeFamilleEtAge("Kim Cary", "1983\n");
*/

//5.Valeur d'argument par défaut de PHP
/*
    function taille($maTaille = 179)
    {
        echo "Je fais : $maTaille cm\n";
    }

    taille(350);
    taille(); // will use the default value of 50
    taille(135);
    taille(80);
*/

//5.Valeurs renvoyées
/*
    function somme($a, $b)
    {
        $c = $a + $b;
        return $c;
    }

    echo "5 + 10 = " . somme(5, 10) . "\n";
    echo "7 + 13 = " . somme(7, 13) . "\n";
    echo "2 + 4 = " . somme(2, 4) . "\n";
*/

//6.Passer des arguments par référence
function ajoutDe10(&$value)
{
    $value += 10;
}
$num = 2;
ajoutDe10($num);
echo $num;

//7.Nombre variable d'arguments
function sumMyNumbers(...$x)
{
    $n   = 0;
    $len = count($x);
    for ($i = 0; $i < $len; $i++) {
        $n += $x[$i];
    }
    return $n;
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $a;
