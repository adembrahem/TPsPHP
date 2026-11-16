<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="GET">
        <label for="nom">Nom à rechercher :</label>
        <input id="nom" type="text" name="nom"><br>
        <button type="submit">Rechercher</button>
    </form> 
    
    <?php
        if (empty($_GET['nom'])) {
                echo "Le nom est obligatoire.";
        }
        else{
            $nomRecherche =$_GET['nom'];
            require_once 'connexion.php';
            $sql = "SELECT id, nom, prenom, age, formation, moyenne
            FROM etudiants
            WHERE nom LIKE :nom
            ORDER BY nom, prenom";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
            'nom' => '%' . $nomRecherche . '%'
            ]);
            $etudiants = $stmt->fetchAll();
            if(empty($etudiants)){
                echo "Aucun Etudiant trouvée";
            }
            else{
            foreach ($etudiants as $etudiant){
                echo $etudiant["nom"];
                echo $etudiant["prenom"];
                echo $etudiant["age"];
                echo $etudiant["formation"];
                echo $etudiant["moyenne"];
            }
            }
        }
    ?>
    
    
</body>
</html>