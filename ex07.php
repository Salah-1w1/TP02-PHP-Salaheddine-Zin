<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7 - Boucles for</title>
</head>
<body>
    <h1>Exercice 7 : boucles for</h1>

    <section>
        <h2>Table de multiplication</h2>
        <?php
        $nombre = 7;

        // Table de multiplication de 7, de 1 à 10
        for ($i = 1; $i <= 10; $i++) {
            echo $nombre . " × " . $i . " = " . ($nombre * $i) . "<br>";
        }
        ?>
    </section>

    <section>
        <h2>Pyramide d'étoiles</h2>
        <pre>
<?php
        // Boucle externe : les lignes (1 à 6)
        for ($ligne = 1; $ligne <= 6; $ligne++) {
            // Boucle interne : les étoiles de la ligne
            for ($etoile = 1; $etoile <= $ligne; $etoile++) {
                echo "*";
            }
            echo "\n";
        }
?>
        </pre>
    </section>

    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>