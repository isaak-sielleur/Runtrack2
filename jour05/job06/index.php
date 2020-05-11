<?php

    function leetspeak($str)
    {
        $str = "Quand on ne peut revenir en arrière, on ne doit se préoccuper que de la meilleure façon d'aller de l'avant";

        $resultat = str_replace
        (
            array('a','b','e','g','l','s','t','A','B','E','G','L','S','T'),
            array('4','8','3','6','1','5','7','4','8','3','6','1','5','7'), $str
        );

        return($resultat);
    }

    echo leetspeak("");

?>