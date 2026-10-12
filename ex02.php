<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 - Variables</title>
</head>
<body>
    <h1>Exercice 2 : variables, casse et concaténation</h1>

    <?php
    // Variables avec des données fictives
    $nom = "Zin";
    $prenom = "Salaheddine";
    $age = 20;
    $formation = "Informatique";

    // Construction de la phrase avec la concaténation (.)
    $phrase = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans et je suis en formation " . $formation . ". ";

    // Ajout d'une phrase avec l'opérateur .=
    $phrase .= "J'apprends PHP";

    echo "<p>" . $phrase . "</p>";

    // PHP est sensible à la casse : $note et $Note sont deux variables différentes
    $note = 12;
    $Note = 16;

    echo "<p>Valeur de \$note : " . $note . "</p>";
    echo "<p>Valeur de \$Note : " . $Note . "</p>";
    ?>

    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>