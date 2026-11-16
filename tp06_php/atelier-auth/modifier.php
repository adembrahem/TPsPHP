<?php
require_once __DIR__ . '/auth.php';
protegerPage();
require_once 'connexion_bdd.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $sql = "UPDATE etudiants SET 
            nom = :nom,
            prenom = :prenom,
            age = :age,
            formation = :formation,
            moyenne = :moyenne
            WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
        'id' => $_POST["id"],
        'nom' => $_POST["nom"],
        'prenom' => $_POST["prenom"],
        'age' => $_POST["age"],
        'formation' => $_POST["formation"],
        'moyenne' => $_POST["moyenne"]
    ]);
    header("Location: etudiants.php?success=1");
    exit();
}