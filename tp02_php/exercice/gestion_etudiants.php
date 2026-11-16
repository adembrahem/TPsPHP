<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    require_once "./etudiants.php";
    $nom= $_GET["nomR"];
    ?>
</head>
<body>
    <?php
    require_once "./tableaux.php";
    echo "les nombres des etudiants est: ".count($etudiants)."<br>";
    echo "moyenne de la classe est: ".(number_format(SommeMoy($etudiants) / count($etudiants),2))."<br>";
    echo "nombres d'admis est : ".nombresAdmin($etudiants)."<br>";
    
    ?>
    <form action="" method="get">
        <label for="nom">Nom à rechercher</label>
        <input type="text" name="nomR" id="nom">
        <br>
        <input type="submit" value="Envoyer">
    </form>

    <?php
        $res= rechercherEtudiant($etudiants, $nom);
        if ($res!=NULL) {
            echo "le nom a rechercher est : <br>";
            afficherEtudiant($res);
        }
        else{
            echo "le nom a rechercher est non trouvee";
        }

        echo "la liste des etudiants ayant une moyenne superieure a 12: <br>";
        afficherEtudiantMoy($etudiants,12);

        echo "la Meilleur note est: <br>";
        $MeilleurMoy= trouverMeilleurEtudiant($etudiants);
        foreach($MeilleurMoy as $etudiant){
            echo "--------------------Etudiant N".(++$i).": -------------------------------";
            afficherEtudiant($etudiant);
        }
        
    ?>

</body>
</html>