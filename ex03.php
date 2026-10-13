<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 - Constantes et calculs</title>
</head>
<body>
    <h1>Exercice 3 : constantes et calculs</h1>

    <?php
    // Constantes
    define("TAUX_TVA", 20);
    define("DEVISE", "MAD");

    // Données de la commande
    $prixUnitaireHT = 60;
    $quantite = 3;

    // Calculs
    $totalHT = $prixUnitaireHT * $quantite;
    $montantTVA = $totalHT * TAUX_TVA / 100;
    $totalTTC = $totalHT + $montantTVA;

    // Ajout des frais de livraison avec +=
    $fraisLivraison = 15;
    $montantFinal = $totalTTC;
    $montantFinal += $fraisLivraison;
    ?>

    <h2>Récapitulatif de la commande</h2>
    <ul>
        <li>Prix unitaire HT : <?= $prixUnitaireHT . " " . DEVISE ?></li>
        <li>Quantité : <?= $quantite ?></li>
        <li>Total HT : <?= $totalHT . " " . DEVISE ?></li>
        <li>TVA (<?= TAUX_TVA ?> %) : <?= $montantTVA . " " . DEVISE ?></li>
        <li>Total TTC : <?= $totalTTC . " " . DEVISE ?></li>
        <li>Frais de livraison : <?= $fraisLivraison . " " . DEVISE ?></li>
        <li><strong>Montant final : <?= $montantFinal . " " . DEVISE ?></strong></li>
    </ul>

    <?php
    // Vérification de l'existence de la constante avec defined()
    if (defined("TAUX_TVA")) {
        echo "<p>La constante TAUX_TVA existe.</p>";
    } else {
        echo "<p>La constante TAUX_TVA n'existe pas.</p>";
    }
    ?>

    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>