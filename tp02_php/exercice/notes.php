<?php 
    function somme($tab){
        $som=0;
        for ($i=0; $i < count($tab) ; $i++) { 
            $som += $tab[$i];
        }
        return $som;
    }

    function maximale($tab){
        $max= $tab[0];
        for ($i=1; $i < count($tab) ; $i++) { 
            if ($tab[$i]> $max ) {
                $max= $tab[$i];
            }
        }
        return $max;
    }

    function minmale($tab){
        $min= $tab[0];
        for ($i=1; $i < count($tab) ; $i++) { 
            if ($tab[$i]< $min ) {
                $min= $tab[$i];
            }
        }
        return $min;
    }

    function moyenne($tab){
        return somme($tab)/count($tab);
    }

    function nbNote($tab,$moy){
        $nb=0;
        for ($i=0; $i < count($tab) ; $i++) { 
            if ($tab[$i]>=$moy) {
                $nb++;
            }
        }
        return $nb;
    }
    function pourcentageAdmin($note){
        return (nbNote($note,10)/count($note))*100;
    }
?>