<?php
    require_once "fonctions.php";
    session_start();
    protegerPage();
    echo $_SESSION["username"];
    echo "Bienvenue!! ";
    $nom= "";
    if($_SERVER["REQUEST_METHOD"]==="GET"){
        $nom= $_GET["nom"] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="nom" value="<?= htmlspecialchars($nom ?? '')?>">
        <button type="submit">Rechercher</button>
    </form>

    <?php
    $etudiants = [
        [
        "nom" => "Khediri",
        "prenom" => "Ahmed",
        "age" => 20,
        "moyenne" => 14.5
        ],
        [
        "nom" => "Ali",
        "prenom" => "Sami",
        "age" => 21,
        "moyenne" => 11.5
        ],
        [
        "nom" => "Ben Salah",
        "prenom" => "Nour",
        "age" => 19,
        "moyenne" => 16
        ]
        ];
        if (empty($nom)) {
            echo "Le nom est obligatoire <br>";
        }
        else{
            $res= rechercherEtudiant($etudiants, $nom);
            if ($res!==null) {
                afficherEtudiant($res);
            }
            else{
                echo "Etudiant avec nom $nom introuvable! <br>";
            }
        }

    }
    ?>
</body>
</html>