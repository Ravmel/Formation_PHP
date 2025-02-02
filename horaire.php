Exercice : Vérification des Horaires d'Ouverture d'un Magasin

Objectif: Créer un script PHP qui demande à un utilisateur d'entrer deux horaires d'ouverture pour son magasin et vérifie si le magasin est ouvert à une heure de visite donnée.

Instructions:
1. Demandez à l'utilisateur d'entrer deux horaires d'ouverture pour son magasin. Chaque horaire doit inclure une heure de début et une heure de fin. Assurez-vous que l'heure de début n'est pas supérieure ou égale à l'heure de fin.
2. Demandez à l'utilisateur d'entrer une heure de visite.
3. Vérifiez si l'heure de visite se situe dans l'un des deux horaires d'ouverture.
4. Affichez un message indiquant si le magasin est ouvert ou fermé à l'heure de visite donnée.

Exemple de Code :
```php
<?php
    // Demande des horaires d'ouverture
    echo "Entrez l'heure de début du premier horaire (format 24h, ex: 08:00) : ";
    $debut1 = trim(fgets(STDIN));
    echo "Entrez l'heure de fin du premier horaire (format 24h, ex: 12:00) : ";
    $fin1 = trim(fgets(STDIN));

    echo "Entrez l'heure de début du deuxième horaire (format 24h, ex: 14:00) : ";
    $debut2 = trim(fgets(STDIN));
    echo "Entrez l'heure de fin du deuxième horaire (format 24h, ex: 18:00) : ";
    $fin2 = trim(fgets(STDIN));

    // Vérification des horaires
    if ($debut1 >= $fin1 || $debut2 >= $fin2) {
        echo "Erreur : L'heure de début ne doit pas être supérieure ou égale à l'heure de fin.\n";
        exit;
    }

    // Demande de l'heure de visite
    echo "Entrez l'heure de visite (format 24h, ex: 10:00) : ";
    $visite = trim(fgets(STDIN));

    // Vérification si le magasin est ouvert
    if (($visite >= $debut1 && $visite < $fin1) || ($visite >= $debut2 && $visite < $fin2)) {
        echo "Le magasin est ouvert à l'heure de visite.\n";
    } else {
        echo "Le magasin est fermé à l'heure de visite.\n";
    }
?>
```

Objectif de l'exercice : Cet exercice vise à renforcer vos compétences en manipulation des entrées utilisateur, en gestion des conditions et en vérification des horaires en PHP.
