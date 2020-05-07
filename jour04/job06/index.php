<?php

	if (isset ($_GET["chiffre"]))
	{
		if ($_GET["chiffre"] % 2 === 0) 
		{
			echo "Nombre pair <br />"; 
		} 
			
		else 
		{
			echo "Nombre impair <br />"; 			
		}
	}
    
?>

<form name="nombre" method="get">
<p>
   <label for="chiffre"> Ecrivez un nombre :<br /> </label>
   <input type="nombre" name="chiffre" />
</p>
<button>envoyer</button>
</form>
