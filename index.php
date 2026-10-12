<?php
// Page d'accueil du TP 02 : liens vers les 10 exercices
$exercices = [
    ["Exercice 1 : balises, HTML/PHP, commentaires, echo", "ex01.php"],
    ["Exercice 2 : variables, casse, concaténation", "ex02.php"],
    ["Exercice 3 : constantes, calculs, affectation composée", "ex03.php"],
    ["Exercice 4 : types de données et conversions", "ex04.php"],
    ["Exercice 5 : conditions if / elseif / else", "ex05.php"],
    ["Exercice 6 : switch et date()", "ex06.php"],
    ["Exercice 7 : boucles for (table et pyramide)", "ex07.php"],
    ["Exercice 8 : while, do-while, continue, break", "ex08.php"],
    ["Exercice 9 : tableau associatif et foreach", "ex09.php"],
    ["Exercice 10 : formulaire GET", "ex10_get.html"],
    ["Exercice 10 : formulaire POST", "ex10_post.html"],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 02 - Programmation Web 2 (PHP)</title>
</head>
<body>
    <h1>TP 02 - Programmation Web 2 (PHP)</h1>
    <p>Étudiant : Salaheddine Zin</p>
    <p>Choisissez un exercice :</p>
    <ul>
        <?php foreach ($exercices as $exercice): ?>
            <li><a href="<?= $exercice[1] ?>"><?= $exercice[0] ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>