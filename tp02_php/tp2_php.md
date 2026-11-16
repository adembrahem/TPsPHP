Act1:
        Questions:
        1. les element d'un tableau est 4.
        2. l’indice du premier élément est 0.
        3. est l’indice du dernier élément est 3.
        4. echo $etudiants[2] == "Nour".
        5. N'affiche rien.
Act2:
        Questions:
        1. le rôle de count() est returner le nombre d'elements d'un tableau.
        2. Pourquoi utilise-t-on < et non <= ?
        => car le tableau commance par l'index 0.
        3. Oui, c'est possible puisque je connais le nombre d'éléments du tableau,
           mais j'utilise count() dans tous les cas.
Act3:
        Questions:
        1. Dans quels cas foreach est-il plus pratique que for ?
        => lorsque n'est connais pas le nombres d'elements d'un tableau.
        => lorsque récupérer directement la valeur de chaque élément...

Act4:
        Questions:
        <?php
        $etudiants = ["adem","sami","farouk","hmeda","ajmi"];
        array_push($etudiants, "Yassine");
        array_pop($etudiants);
        print_r($etudiants);
        echo "<br>".count($etudiants)."<br>";
        foreach($etudiants as $value){
            echo $value."<br>";
        }
        ?>

Act5:

        <?php
             $etudiants = ["Ahmed", "Sami", "Nour", "Amine"];
             $MotRech= "Ahmed";
             if (in_array($MotRech, $etudiants)) {
                echo "Etudiant trouve <br>";
             }
             else{
                 echo "Etudiant non trouve <br>";
             }
        ?>

Act7:
        Question: Afficher tous les étudiants avec foreach:
        =>
        $i=0;
        foreach($etudiants as $tab){
            echo "---------------------------Tableau ".(++$i)."--------------------------- <br>";
            foreach($tab as $cle => $value){
                echo "$cle: $value <br>";
            }
        }

Act9:
    Question 1:
    => Le rôle d'un paramètre de fonction est de récupérer la valeur transmise lors de son appel.
    Question 2:
    => Au lieu d'écrire les mêmes lignes de code à chaque fois que vous en avez besoin, vous les regroupez à un seul endroit (fonction) et vous leur donnez un nom.

Act10:
    Question:
    => La différence fondamentale réside dans la destination de la donnée
       1. echo :affiche immédiatement une valeur à l'écran.
       2. retuenTransmet une valeur à la ligne de code qui a appelé la fonction.
    