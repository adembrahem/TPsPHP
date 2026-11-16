<?php
require_once __DIR__ . '/auth.php';
protegerPage();
if (isset($_GET["pagePresidente"])) {
    $pagePresidante= $_GET["pagePresidente"].".php";
}
if (isset($_GET['success'])) {
    if ($_GET['success']==1) {
        echo "<script>alert('Étudiant modifié avec succès !');</script>";
    }
    else{
        echo "<script>alert('Étudiant ajouté avec succès !');</script>";
    }
}
require_once 'connexion_bdd.php';
    $sql = "SELECT id, nom, prenom, age, formation, moyenne
    FROM etudiants
    ORDER BY id desc";
    $stmt = $pdo->query($sql);
    $etudiants = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Liste des étudiants</title>
</head>
<body>
    <p>
        <button><a href="ajouter.php" 
    style="text-decoration: none;">Ajouter un nouvelle etudiant</a></button>
    </p>
<h1>Liste des étudiants</h1>
<table border="1" cellpadding="8">
<thead>
<tr>
<th>ID</th>
<th>Nom</th>
<th>Prénom</th>
<th>Âge</th>
<th>Formation</th>
<th>Moyenne</th>
<th>Action</th>
</tr>
</thead>
<tbody>

<?php foreach ($etudiants as $etudiant): ?>
<tr>
<td><?=$etudiant['id'] ?></td>
<td><?= $etudiant['nom']?></td>
<td><?= $etudiant['prenom']?></td>
<td><?= $etudiant['age'] ?></td>
<td><?= $etudiant['formation']?></td>
<td><?= $etudiant['moyenne'] ?></td>
<td>
    <form method="POST" action="supprimer.php"
        onsubmit="return confirm('Voulez-vous vraiment supprimer cet étudiant ?')">
        <input type="hidden" name="id" value="<?= htmlspecialchars($etudiant['id']) ?>">
        <button type="submit">Supprimer</button>
    </form>
    <button><a href="formmodifier.php?id=<?php echo $etudiant['id']?>" 
    style="text-decoration: none;">Modifier</a></button>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
    <p>
        <a href="<?php echo $pagePresidante; ?>">Retourner à la page précédente</a>
    </p>
</body>
</html>