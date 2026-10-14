<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9 - Tableau associatif</title>
</head>
<body>
    <h1>Exercice 9 : tableau associatif et foreach</h1>

    <?php
    // Données fictives
    $notes = [
        "Amine" => 12,
        "Sara" => 16,
        "Youssef" => 8,
        "Lina" => 14,
        "Adam" => 10
    ];

    $seuil = 10;
    $somme = 0;
    $nbValides = 0;
    $meilleureNote = -1;
    $meilleurEtudiant = "";
    ?>

    <table border="1" cellpadding="6" cellspacing="0">
        <thead>
            <tr>
                <th>Étudiant</th>
                <th>Note</th>
                <th>Résultat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($notes as $etudiant => $note) {
                // Accumulation de la somme
                $somme += $note;

                // Validation avec le seuil de 10
                if ($note >= $seuil) {
                    $resultat = "Validé";
                    $nbValides++;
                } else {
                    $resultat = "Non validé";
                }

                // Recherche de la meilleure note
                if ($note > $meilleureNote) {
                    $meilleureNote = $note;
                    $meilleurEtudiant = $etudiant;
                }

                echo "<tr>";
                echo "<td>" . $etudiant . "</td>";
                echo "<td>" . $note . "</td>";
                echo "<td>" . $resultat . "</td>";
                echo "</tr>";
            }

            $moyenne = $somme / count($notes);
            ?>
        </tbody>
    </table>

    <h2>Statistiques</h2>
    <ul>
        <li>Somme des notes : <?= $somme ?></li>
        <li>Moyenne de la classe : <?= $moyenne ?></li>
        <li>Nombre d'étudiants ayant validé : <?= $nbValides ?></li>
        <li>Meilleure note : <?= $meilleureNote ?> (<?= $meilleurEtudiant ?>)</li>
    </ul>

    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>