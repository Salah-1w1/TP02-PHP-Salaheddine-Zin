<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6 - switch et date()</title>
</head>
<body>
    <h1>Exercice 6 : switch et date()</h1>

    <?php
    // Valeur fixe à tester : 1, 3, 12 puis 15
    $numeroMois = 3;

    switch ($numeroMois) {
        case 1:
            $nomMois = "Janvier";
            break;
        case 2:
            $nomMois = "Février";
            break;
        case 3:
            $nomMois = "Mars";
            break;
        case 4:
            $nomMois = "Avril";
            break;
        case 5:
            $nomMois = "Mai";
            break;
        case 6:
            $nomMois = "Juin";
            break;
        case 7:
            $nomMois = "Juillet";
            break;
        case 8:
            $nomMois = "Août";
            break;
        case 9:
            $nomMois = "Septembre";
            break;
        case 10:
            $nomMois = "Octobre";
            break;
        case 11:
            $nomMois = "Novembre";
            break;
        case 12:
            $nomMois = "Décembre";
            break;
        default:
            $nomMois = "Numéro de mois invalide";
            break;
    }

    echo "<p>Numéro du mois : " . $numeroMois . "</p>";
    echo "<p>Résultat : " . $nomMois . "</p>";
    ?>

    <?php
    // Partie 2 : mois courant du serveur avec date("m")
    $moisCourant = (int) date("m");

    switch ($moisCourant) {
        case 1:
            $nomMoisCourant = "Janvier";
            break;
        case 2:
            $nomMoisCourant = "Février";
            break;
        case 3:
            $nomMoisCourant = "Mars";
            break;
        case 4:
            $nomMoisCourant = "Avril";
            break;
        case 5:
            $nomMoisCourant = "Mai";
            break;
        case 6:
            $nomMoisCourant = "Juin";
            break;
        case 7:
            $nomMoisCourant = "Juillet";
            break;
        case 8:
            $nomMoisCourant = "Août";
            break;
        case 9:
            $nomMoisCourant = "Septembre";
            break;
        case 10:
            $nomMoisCourant = "Octobre";
            break;
        case 11:
            $nomMoisCourant = "Novembre";
            break;
        case 12:
            $nomMoisCourant = "Décembre";
            break;
        default:
            $nomMoisCourant = "Numéro de mois invalide";
            break;
    }
    ?>

    <h2>Mois courant du serveur</h2>
    <p>Numéro : <?= $moisCourant ?></p>
    <p>Nom : <?= $nomMoisCourant ?></p>

    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>