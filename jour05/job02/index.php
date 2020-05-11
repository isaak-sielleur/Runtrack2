<?php
	
	$jour = true;

	function Bonjour($jour)
	{
		if ($jour == true) 
		{
			echo "bonjour";	
		}
		
		if ($jour == false) 
		{
			echo "bonsoir";
		}

	}
	
	echo Bonjour($jour);
	
?>