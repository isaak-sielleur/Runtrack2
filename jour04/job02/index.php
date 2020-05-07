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

<table>
	<thead>
		<th>Argument</th> <th>Valeur</th>
	</thead>
	<tbody>
		<?php
		foreach ($_GET as $key => $value) {
			echo "<tr><td>".$key."</td><td>".$value."</td></tr>";;
		}
		?>
	</tbody>
</table>

