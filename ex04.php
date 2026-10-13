<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 - Types de données</title>
</head>
<body>
    <h1>Exercice 4 : types de données et conversions</h1>

    <?php
    // Six variables de types différents
    $entier = 42;
    $chaineNombre = "42";
    $decimal = 15.8;
    $vrai = true;
    $faux = false;
    $vide = null;
    ?>

    <h2>1. Types et valeurs avec var_dump()</h2>
    <pre>
<?php
    var_dump($entier);
    var_dump($chaineNombre);
    var_dump($decimal);
    var_dump($vrai);
    var_dump($faux);
    var_dump($vide);
?>
    </pre>

    <h2>2. Conversions</h2>
    <pre>
<?php
    echo "\"42\" converti en entier : ";
    var_dump((int) $chaineNombre);

    echo "15.8 converti en entier : ";
    var_dump((int) $decimal);

    echo "42 converti en chaîne : ";
    var_dump((string) $entier);
?>
    </pre>

    <h2>3. true et false avec echo</h2>
    <?php
    echo "<p>echo true : [" . $vrai . "]</p>";
    echo "<p>echo false : [" . $faux . "]</p>";
    ?>

    <h2>4. true et false avec var_dump()</h2>
    <pre>
<?php
    var_dump($vrai);
    var_dump($faux);
?>
    </pre>

    <h2>5. Conversion en booléen</h2>
    <pre>
<?php
    echo "0 : ";
    var_dump((bool) 0);

    echo "\"0\" : ";
    var_dump((bool) "0");

    echo "\"PHP\" : ";
    var_dump((bool) "PHP");

    echo "tableau vide : ";
    var_dump((bool) []);
?>
    </pre>

    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>