<?php
require_once "connexion.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $sql = "DELETE FROM etudiants WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'id' => $id
    ]);
    if ($stmt->rowCount() > 0) {
        echo "Étudiant supprimé avec succès !";
    } else {
        echo "Aucun étudiant ne correspond à cet identifiant.";
    }

    echo '<br><a href="liste.php">Retour à la liste</a>';
}
?>