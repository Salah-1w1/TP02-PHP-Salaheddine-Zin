<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 - Affichage PHP</title>
</head>
<body>
    <h1>Exercice 1 : affichage avec PHP</h1>

    <?php
    // Commentaire sur une seule ligne : message de bienvenue
    echo "<p>Bienvenue dans mon TP PHP</p>";

    /*
       Commentaire sur plusieurs lignes :
       les informations ci-dessous sont fictives
       et affichées avec la fonction echo.
    */
    echo "<p>Nom : Zin</p>";
    echo "<p>Prénom : Salaheddine</p>";
    echo "<p>Groupe : 01</p>";
    ?>

    <p><?= "Fin de l'exercice 1 : merci et à bientôt !" ?></p>

    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>