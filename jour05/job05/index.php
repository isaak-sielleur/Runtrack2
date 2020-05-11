<?php

	$str = "I close my eyes to see";
	$char = "e";


	function occurrences($str, $char)
	{	
		$longueur = strlen($str);
		$compteur = 0;

		for ($i=0; $i <$longueur ; $i++) 
		{ 
			if ($str[$i] == $char)
			{
				$compteur++;	
			}
		}
		return $compteur;
	}

	echo occurrences($str,$char);

 ?>