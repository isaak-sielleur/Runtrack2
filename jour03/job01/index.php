<?php

    $arrNombres = array("200", "204", "173", "98", "171", "404", "459");

    foreach ($arrNombres as $chiffre) 
    {
        if ($chiffre%2 === 0) 
        {
			echo "<br />".$chiffre." est un nombre pair"; 
        } 

        else 
        {
			echo "<br />".$chiffre." est un nombre impair"; 			
		}
    }

?>