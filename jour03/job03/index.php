<?php

	$str = "I'm sorry Dave I'm afraid I can't do that";

	// Version 1
	for ($i=0; $i < strlen($str); $i++) {
		$var = strtolower($str[$i]);
		if ($var == "a" || $var == "e" || $var == "i" || $var == "o" || $var == "u") {
			echo $str[$i];
		}
	}

	// echo "<br />";

	// // Version 2
	// $arr = array("A","a","E","e","I","i","O","o","U","u");

	// for ($i=0; $i < strlen($str); $i++) { 
	// 	if (in_array($str[$i], $arr)) {
	// 		echo $str[$i];
	// 	}
	// }

?>