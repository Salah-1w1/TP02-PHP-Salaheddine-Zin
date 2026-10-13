<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 - Conditions</title>
</head>
<body>
    <h1>Exercice 5 : conditions if / elseif / else</h1>

    <?php
    // Valeur à tester : changer cette valeur pour chaque test
    $moyenne = 9;

    echo "<p>Moyenne : " . $moyenne . "</p>";

    // Vérification de la validité de la note (entre 0 et 20)
    if ($moyenne < 0 || $moyenne > 20) {
        echo "<p>Note invalide</p>";
    } else {
        // Note valide : choix de la mention
        if ($moyenne < 10) {
            $message = "Non validé";
        } elseif ($moyenne < 12) {
            $message = "Passable";
        } elseif ($moyenne < 14) {
            $message = "Assez bien";
        } elseif ($moyenne < 16) {
            $message = "Bien";
        } else {
            $message = "Très bien";
        }

        echo "<p>Mention : " . $message . "</p>";
    }
    ?>

    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>