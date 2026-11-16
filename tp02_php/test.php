<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        require_once  "./exercice/tableaux.php";
        function trouverMeilleurEtudiant($etudiants){
            $Meilleur= $etudiants[0];
            for ($i=1; $i < count($etudiants) ; $i++) { 
                if ($etudiants[$i]["moyenne"]> $Meilleur["moyenne"]) {
                    $Meilleur= $etudiants[$i];
                }
            }
            return $Meilleur;
        }
    ?>
</head>
<body>
    <?php 
        
        afficherEtudiant(trouverMeilleurEtudiant($etudiants));
    ?>
</body>
</html>