<?php

	$str = "On nest pas le meilleur quand on le croit mais quand on le sait";
	$dic = array('consonnes' => 0, 'voyelles' => 0);


	$str = str_replace(" ", "", $str); // Je supprime les espaces
	$arr = array("A","a","E","e","I","i","O","o","U","u");

	for ($i=0; $i < strlen($str); $i++) 
	{
		if (in_array($str[$i], $arr)) 
		{
			$dic['voyelles'] = $dic['voyelles'] + 1;
		} 

		else 
		{
			$dic['consonnes'] = $dic['consonnes'] + 1;
		}
	}

	echo "<table>";
	echo "<thead>";
	echo "<tr><th>consonnes</th><th>voyelles</th></tr>";
	echo "</thead>";
	echo "<tr><td>".$dic['voyelles']."</td><td>".$dic['consonnes']."</td></tr>";
	echo "</table>";
?>