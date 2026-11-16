<?php
    require_once "notes.php";
    require_once "tableaux.php";
    $note= [];
    foreach($etudiants as $etudiant){
        $note[]= $etudiant["moyenne"];
    }
    echo "le meilleur moyenne est :".maximale($note)."<br>";
    echo "plus faible moyenne est : ".minmale($note)."<br>";
    echo "nombres d'etudinats ayant une moyenne >=14 est: ".nbNote($note,14)."<br>";
    echo "pourcentage d'etudiants admis  ".number_format(pourcentageAdmin($note),2)."%<br>";

?>