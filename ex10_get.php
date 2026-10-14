<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 10 - Traitement GET</title>
</head>
<body>
    <h1>Exercice 10 : traitement du formulaire GET</h1>

    <?php
    // Vérification de la présence des trois champs (évite "Undefined array key")
    if (!isset($_GET["nom"], $_GET["prenom"], $_GET["groupe"])) {
        echo "<p>Aucune donnée reçue. Veuillez d'abord remplir le formulaire.</p>";
    } else {
        // trim() supprime les espaces au début et à la fin
        $nom = trim($_GET["nom"]);
        $prenom = trim($_GET["prenom"]);
        $groupe = trim($_GET["groupe"]);

        // Refus des valeurs vides
        if ($nom === "" || $prenom === "" || $groupe === "") {
            echo "<p>Formulaire incomplet : tous les champs sont obligatoires.</p>";
        } else {
            // Échappement avant affichage dans la page HTML
            $nomSafe = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
            $prenomSafe = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
            $groupeSafe = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');

            echo "<p>Bienvenue " . $prenomSafe . " " . $nomSafe . " (groupe " . $groupeSafe . ") !</p>";
        }
    }
    ?>

    <p><a href="ex10_get.html">Retour au formulaire</a></p>
    <p><a href="index.php">Retour à l'accueil</a></p>
</body>
</html>