<?php

	$chaine = "Certaines choses changent, et d'autres ne changeront jamais.";

    $longueur = strlen($chaine);

    $i = 0;
    
	while ($i < $longueur) 
	{
        if ($i == ($longueur -1)) 
        {
			echo $chaine[0];
			break;
        }
        
        else
        {
			echo $chaine[$i +1];
        }
        
		$i++;
	}

?>