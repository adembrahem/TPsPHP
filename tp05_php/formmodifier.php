 <?php
        $id= $_GET["id"] ;
        if (empty($id)) {
            echo "le champ id est vide!!";
        }
        else{
            require_once "connexion.php";
            $sql = "SELECT id, nom, prenom, age, formation, moyenne
            FROM etudiants
            WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['id' => $id]);
            $etudiant = $stmt->fetch();
            if (empty($etudiant)) {
                echo "aucun etudiant trouvee avec cette $id";
            }
            else{
                echo '
                    <form method="POST" action="modifier.php">
                        <input type="number" name="id" value="' . htmlspecialchars($etudiant['id']) . '">
                        <input type="text" name="nom" value="' . htmlspecialchars($etudiant['nom']) . '">
                        <input type="text" name="prenom" value="' . htmlspecialchars($etudiant['prenom']) .'">
                        <input type="number" name="age" value="' . htmlspecialchars($etudiant['age']) . '">
                        <input type="text" name="formation" value="' . htmlspecialchars($etudiant['formation']) . '">
                        <input type="number" name="moyenne" value="' . htmlspecialchars($etudiant['moyenne']) . '">
                        <button type="submit">Modifier</button>
                    </form>';

            }
        }
?>
