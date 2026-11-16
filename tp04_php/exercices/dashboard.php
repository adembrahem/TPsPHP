<?php
    require_once "./fonctions.php";
    session_start();
    protegerPage();
    echo $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>
<body>
    <h1>Tableau de bord</h1>
    <p>Bienvenue dans votre espace d'administration.</p>
    <p>gestion des etudiants</p>
    <a href="index.php">Liste des étudiants</a>
    <a href="ajouter.php">Ajouter un etudiant</a>
    <a href="rechercher.php">Rechercher un etudiant</a>
    <button><a style="text-decoration: none;" href="logout.php">Se déconnecter</a></button>
</body>
</html>