# TP 02 - Programmation Web 2 (PHP)

- **Nom** : Zin
- **Prénom** : Salaheddine
- **Groupe** : G1
- **Titre du TP** : TP 02 - Scripts PHP, tableaux, formulaires GET/POST et GitHub
- **Module** : Programmation Web 2 - Année universitaire 2026/2027
- **Dépôt GitHub** : https://github.com/Salah-1w1/TP02-PHP-Salaheddine-Zin

## Lancer le projet

Ouvrir un terminal à la racine du projet, puis exécuter :

    & "C:\xampp\php\php.exe" -S localhost:8000

Ensuite ouvrir dans le navigateur : http://localhost:8000/index.php

Arrêter le serveur avec Ctrl + C.

## Liste des exercices

| Fichier | Exercice |
|---|---|
| index.php | Page d'accueil avec un lien vers chaque exercice |
| ex01.php | Exercice 1 : balises, HTML/PHP, commentaires, echo |
| ex02.php | Exercice 2 : variables, casse, concaténation |
| ex03.php | Exercice 3 : constantes, calculs, affectation composée |
| ex04.php | Exercice 4 : types de données et conversions |
| ex05.php | Exercice 5 : conditions if / elseif / else |
| ex06.php | Exercice 6 : switch et date() |
| ex07.php | Exercice 7 : boucles for (table de multiplication, pyramide) |
| ex08.php | Exercice 8 : while, do-while, continue, break |
| ex09.php | Exercice 9 : tableau associatif et foreach |
| ex10_get.html / ex10_get.php | Exercice 10 : formulaire GET |
| ex10_post.html / ex10_post.php | Exercice 10 : formulaire POST |

## Réponses courtes

### Exercice 2 : variables

`$note` et `$Note` sont deux variables différentes car PHP est sensible à la casse pour les noms de variables

Noms de variables valides : `$a`, `$_a`, `$a_a`, `$AAA`, `$a1`.

Noms invalides : `$a!` (le caractère `!` est interdit) et `$1a` (un nom ne peut pas commencer par un chiffre)

### Exercice 4 : echo et var_dump()

Avec `echo`, `true` s'affiche sous la forme `1` et `false` s'affiche sous la forme d'une chaîne vide (rien n'apparaît), car `echo` convertit la valeur booléenne en chaîne

Avec `var_dump()`, on voit clairement le type et la valeur : `bool(true)` et `bool(false)`. C'est pourquoi `var_dump()` est plus adapté pour le débogage

### Exercice 5 : valeurs testées et messages obtenus

| Moyenne testée | Message obtenu |
|---|---|
| -1 | Note invalide |
| 9 | Non validé |
| 10 | Passable |
| 12 | Assez bien |
| 14 | Bien |
| 16 | Très bien |
| 21 | Note invalide |

### Exercice 10 : GET et POST

**GET** : après l'envoi du formulaire, les valeurs apparaissent dans l'URL, sous forme de paramètres après le `?` : `ex10_get.php?nom=Alaoui&prenom=Karim&groupe=G2`

**POST** : les valeurs sont envoyées dans le corps de la requête HTTP L'URL reste `ex10_post.php`, sans paramètres visibles

Comparaison : avec GET les données sont visibles dans l'URL (et enregistrées dans l'historique du navigateur), alors qu'avec POST elles n'apparaissent pas dans l'URL

## Résultats des tests

| Exercice | Test effectué | Résultat obtenu |
|---|---|---|
| index.php | Ouverture de la page d'accueil | Liste de 11 liens vers les exercices |
| Exercice 1 | Ouverture de ex01.php | Message de bienvenue, nom, prénom, groupe et phrase finale affichés sur des lignes distinctes ; commentaires non affichés |
| Exercice 2 | Ouverture de ex02.php | Phrase de présentation complète ; `$note` = 12 et `$Note` = 16 |
| Exercice 3 | Ouverture de ex03.php | Total HT = 180 MAD ; TVA = 36 MAD ; TTC = 216 MAD ; montant final = 231 MAD |
| Exercice 4 | Ouverture de ex04.php | Types affichés avec var_dump() ; `(int) 15.8` = 15 |
| Exercice 5 | Test des valeurs -1, 9, 10, 12, 14, 16, 21 | Voir le tableau de l'exercice 5 ci-dessus |
| Exercice 6 | Test des valeurs 1, 3, 12, 15 | Janvier, Mars, Décembre, Numéro de mois invalide |
| Exercice 7 | Ouverture de ex07.php | Table de 7 jusqu'à `7 × 10 = 70` ; pyramide de 6 lignes |
| Exercice 8 | Ouverture de ex08.php | while : 0 exécution ; do-while : 1 exécution ; partie 3 : 1 2 4 5 7 8 10 11 13 14 |
| Exercice 9 | Ouverture de ex09.php | Moyenne = 12 ; 4 étudiants validés ; meilleure note : Sara (16) |
| Exercice 10 (GET) | Ouverture directe, formulaire complet, formulaire incomplet | Message explicatif sans erreur ; message de bienvenue ; message d'incomplétude |
| Exercice 10 (POST) | Ouverture directe, formulaire complet, formulaire incomplet | Message explicatif sans erreur ; message de bienvenue ; message d'incomplétude |