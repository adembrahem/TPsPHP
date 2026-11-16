<?php

            function determinerResultat($moyenne){
                return $moyenne >= 10 ? "Admis" : "Ajourné";
            }

        function appreciation($moyenne)
        {
            if ($moyenne < 10) {
                return "Insuffisant";
            } elseif ($moyenne < 12) {
                return "Passable";
            } elseif ($moyenne < 14) {
                return "Assez bien";
            } elseif ($moyenne < 16) {
                return "Bien";
            }
        return "Très bien";
        }

        function afficherEtudiant($etudiant)
        {
        echo "<p>Nom : {$etudiant['nom']}</p>";
        echo "<p>Prénom : {$etudiant['prenom']}</p>";
        echo "<p>Âge : {$etudiant['age']}</p>";
        echo "<p>Moyenne : {$etudiant['moyenne']}</p>";
        echo "<p>Résultat : " .
        determinerResultat($etudiant['moyenne']) . "</p>";
        echo "<p>Appréciation : " .
        appreciation($etudiant['moyenne']) . "</p>";
        }
        function rechercherEtudiant($etudiants, $nom)
        {
            foreach ($etudiants as $etudiant) {
            if ($etudiant["prenom"] === $nom) {
            return $etudiant;
            }
        }
        return null;
        }

        function obtenirAdmis($etudiants)
        {
            $admis = [];
            foreach ($etudiants as $etudiant) {
            if ($etudiant["moyenne"] >= 10) {
            $admis[] = $etudiant;
            }
            }
            return $admis;
        }
        function nombresAdmin($etudiants){
            return count(obtenirAdmis($etudiants));
        }

        function filtrerParMoyenne($etudiants, $moyenneMinimale)
        {
            $resultat = [];

            foreach ($etudiants as $etudiant) {
            if ($etudiant["moyenne"] >= $moyenneMinimale) {
            $resultat[] = $etudiant;
            }
            }
            return $resultat;
        }
        function afficherEtudiantMoy($etudiants,$moy){
            $list= filtrerParMoyenne($etudiants, $moy);
            $i=0;
            foreach($list as $etudiant){
                echo "--------------------Etudiant N".(++$i).": -------------------------------";
                afficherEtudiant($etudiant);
            }

        }
        function trouverMeilleurEtudiant($etudiants){
            $Meilleur= $etudiants[0];
            for ($i=1; $i < count($etudiants) ; $i++) { 
                if ($etudiants[$i]["moyenne"]> $Meilleur["moyenne"]) {
                    $Meilleur= $etudiants[$i];
                }
            }
            $list= [];
            foreach($etudiants as $etudiant){
                if ($etudiant["moyenne"]==$Meilleur["moyenne"]){
                    $list[]= $etudiant;
                }
            }
            return $list;
        }

        function SommeMoy($etudiants){
            $som=0;
            foreach($etudiants as $etudiant){
                $som += $etudiant["moyenne"];
            }
            return $som;
        }
        function estConnecte(){
            return isset($_SESSION['connecte'])
            && $_SESSION['connecte'] === true;
        }
        function protegerPage(){
            if (!estConnecte()) {
                header("Location: login.php");
                exit;
            }
        }
?>