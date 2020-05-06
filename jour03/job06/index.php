<?php

	$str  = "Les choses que l'on possede finissent par nous posseder.";

	$i = strlen($str) - 1;

	do 
	{
		echo $str[$i];
		$i--;
	} 
	
	while ($i >= 0)
?>