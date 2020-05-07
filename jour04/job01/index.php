<?php

	$i = 0;

	 foreach ($_GET as $key => $value) {
	 	if (isset($value)) {
	 		$i = $i +1;
	 	}
	 		
	 }

	 echo $i;

 ?>

<form name="mon-formulaire1" method="get">
<p>
   <label for="prenom"> Votre prénom :<br /> </label>
   <input type="text" name="prenom" />
</p>
<p>
   <label for="nom">Votre nom :<br /></label>
   <input type="text" name="nom" />
</p>
<p>
   <label for="passe">Votre mot de passe :<br /></label>
   <input type="password" name="passe" />
</p>
<button>envoyer</button>
</form>

