<?php
require_once __DIR__ . '/auth.php';
protegerPage();
$utilisateur = utilisateurCourant();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Tableau de bord</title>
</head>
<body>
<h1>Tableau de bord</h1>
<p>
Bienvenue,
<?= htmlspecialchars($utilisateur['username']) ?>
</p>
<p>Rôle : <?= htmlspecialchars($utilisateur['role']) ?></p>
<ul>
<li><a href="etudiants.php?pagePresidente=dashboard">Gestion des étudiants</a></li>
<?php
if (estAdmin()) {
    echo '<li><a href="admin.php">Administration</a></li>';
    echo '<li><a href="utilisateurs.php">Gestion des utilisateurs</a></li>';
}
?>
<li><a href="deconnexion.php">Se déconnecter</a></li>
</ul>
</body>
</html>