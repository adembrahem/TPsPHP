<?php
    $nom= "";
    $prenom= "";
    $age= "";
    $information= "";
    $moyenne="";
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $nom= $_POST["nom"] ?? '';
        $prenom= $_POST["prenom"] ?? '';
        $age= $_POST["age"] ?? '';
        $formation= $_POST["formation"] ?? '';
        $moyenne= $_POST["moyenne"] ?? '';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>

</head>
<body>
        <form method="post">
            <label>Nom :</label>
            <input type="text" name="nom" value="<?= htmlspecialchars($nom ?? '') ?>">
            <br>
            <label>Prénom :</label>
            <input type="text" name="prenom" value="<?= htmlspecialchars($prenom ?? '') ?>">
            <br>
            <label>Âge :</label>
            <input type="text" name="age" value="<?= htmlspecialchars($age ?? '') ?>">
            <br>
            <label>Formation :</label>
            <input type="text" name="formation" value="<?= htmlspecialchars($formation ?? '') ?>">
            <br>
            <label>Moyenne :</label>
            <input type="number" name="moyenne" value="<?= htmlspecialchars($moyenne ?? '') ?>">
            <br>
            <button type="submit">Envoyer</button>
        </form>
        <?php
            $erreurs = [];
            if (empty($_POST['nom'])) {
                $erreurs[] = "Le nom est obligatoire.";
            }
            if (empty($_POST['prenom'])) {
                $erreurs[] = "Le prenom est obligatoire.";
            }
            if (empty($_POST['age'])) {
                $erreurs[] = "L'age est obligatoire.";
            }
            if (empty($_POST['formation'])) {
                $erreurs[] = "Le formation est obligatoire.";
            }
            if (empty($_POST['moyenne'])) {
                $erreurs[] = "Le moyenne est obligatoire.";
            }

            if ($_POST["age"] < 16) {
                $erreurs[] = "L'âge doit être superieur ou egale 16.";
            }
            if ($_POST["moyenne"]<0 || $_POST["moyenne"]>20) {
                $erreurs[] = "Le moyenne doit être compris entre 0 et 20.";
            }
            if (count($erreurs) > 0) {
                foreach ($erreurs as $erreur) {
                echo "<p>$erreur</p>";
            }
            }
            else{
                require_once 'connexion.php';
                $sql = "INSERT INTO etudiants
                (nom, prenom, age, formation, moyenne)
                VALUES
                (:nom, :prenom, :age, :formation, :moyenne)";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                'nom' => $nom,
                'prenom' => $prenom,
                'age' => $age,
                'formation' => $formation,
                'moyenne' => $moyenne
                ]);
                header("Location: liste.php?success=2");
                exit();
            }

        ?>
</body>
</html>