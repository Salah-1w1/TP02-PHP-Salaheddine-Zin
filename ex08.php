<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8 - Boucles et contrôle</title>
</head>
<body>
    <h1>Exercice 8 : while, do-while, continue, break</h1>

    <section>
        <h2>Partie 1 : nombres pairs de 0 à 20 (while)</h2>
        <?php
        $n = 0;
        while ($n <= 20) {
            if ($n == 10) {
                // Seul le nombre 10 est en gras
                echo "<strong>" . $n . "</strong> ";
            } else {
                echo $n . " ";
            }
            $n += 2;
        }
        ?>
    </section>

    <section>
        <h2>Partie 2 : while et do-while (compteur = 5, condition compteur &lt; 5)</h2>
        <?php
        // Boucle while
        $compteur = 5;
        $executionsWhile = 0;
        while ($compteur < 5) {
            $executionsWhile++;
            $compteur++;
        }

        // Boucle do-while (compteur réinitialisé avant la boucle)
        $compteur = 5;
        $executionsDoWhile = 0;
        do {
            $executionsDoWhile++;
            $compteur++;
        } while ($compteur < 5);

        echo "<p>Nombre d'exécutions avec while : " . $executionsWhile . "</p>";
        echo "<p>Nombre d'exécutions avec do-while : " . $executionsDoWhile . "</p>";
        ?>
    </section>

    <section>
        <h2>Partie 3 : continue et break (de 1 à 20)</h2>
        <?php
        for ($i = 1; $i <= 20; $i++) {
            // Ignorer les multiples de 3
            if ($i % 3 == 0) {
                continue;
            }
            // Arrêter la boucle dès que le compteur atteint 16, avant l'affichage
            if ($i == 16) {
                break;
            }
            echo $i . " ";
        }
        ?>
    </section>

    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>