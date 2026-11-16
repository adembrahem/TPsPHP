<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="get" action="recherche.php">
            <label>Nom :</label>
            <input type="text" name="nom">
            <br>
            <label>Prénom :</label>
            <input type="text" name="prenom">
            <br>
            <label>Âge :</label>
            <input type="number" name="age">
            <br>
            <label>Formation :</label>
            <input type="text" name="formation">
            <br>
            <label>Moyenne :</label>
            <input type="text" name="moy">
            <br>
            <button type="submit">Envoyer</button>
        </form>

        <form method="post" action="inscription.php">
            <label>Nom :</label>
            <input type="text" name="nom">
            <br>
            <label>Prénom :</label>
            <input type="text" name="prenom">
            <br>
            <label>Âge :</label>
            <input type="number" name="age">
            <br>
            <label>Formation :</label>
            <input type="text" name="formation">
            <br>
            <label>Moyenne :</label>
            <input type="text" name="moy">
            <br>
            <button type="submit">Envoyer</button>
        </form>
        
        <?php
            echo "Veuillez remplir le formulaire <br>";
            if (isset($_GET['nom']) and $_GET['nom']!="" )  {
            $nom = $_GET['nom'];
            echo "Nom : " . $nom;
            }
            if (isset($_GET['prenom']) and $_GET['prenom']!="") {
            $prenom = $_GET['prenom'];
            echo "prenom : " . $prenom;
            }
        ?>
</body>
</html>