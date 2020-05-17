<?php
    $link= mysqli_connect("127.0.0.1", "root", "", "jour08");
    $query= mysqli_query($link, "SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'femme'");
    $resultat= mysqli_fetch_all($query, MYSQLI_ASSOC);


?>

<table>
			<tr>
				<th>prenom</th>
				<th>nom</th>
				<th>naissance</th>

			</tr>
			<?php foreach($resultat as $etudiants): ?>
			<tr>

				<td><?=$etudiants['prenom']?></td>
				<td><?=$etudiants['nom']?></td>
				<td><?=$etudiants['naissance']?></td>

			</tr>
			<?php endforeach; ?>
		</table>