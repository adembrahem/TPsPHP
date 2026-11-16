<?php
require_once "fonctions.php";
    session_start();
    protegerPage();
    echo $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    
</head>
<body>
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
        ];echo "Nombres des etudiants est :".count($etudiants)."<br>" ;
        

        // $etudiant= rechercherEtudiant($etudiants, "adem");
        // if($etudiant !=NULL){
        //     afficherEtudiant($etudiant);
        // }
        // else{
        //     echo "Etudiant non trouve";
        // }

        // $i=0;
        // $res= obtenirAdmis($etudiants);
        // if($res != null){

        //     foreach($res as $etudiant){
        //         echo "<br>------------- Etudiant:".(++$i)."-------------";
        //         afficherEtudiant($etudiant);
        //     }
        // }
        // else{
        //     echo "aucun Etudiant admis!";
        // }

        $i=0;
        $res= filtrerParMoyenne($etudiants, 10);
        if($res != null){
            foreach($res as $etudiant){
                echo "<br>------------- Etudiant:".(++$i)."-------------";
                afficherEtudiant($etudiant);
            }
        }
        else{
            echo "aucun Etudiant touver!";
        }

 ?>
</body>
</html>