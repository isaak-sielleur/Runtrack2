<?php
    $link= mysqli_connect("127.0.0.1", "root", "", "jour08");
    $query= mysqli_query($link, "SELECT nom, capacite FROM salles");
    $resultat= mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<table>
			<tr>
				<th>nom</th>
				<th>capacite</th>

			</tr>
			<?php foreach($resultat as $salles): ?>
			<tr>
				<td><?=$salles['nom']?></td>
				<td><?=$salles['capacite']?></td>

			</tr>
			<?php endforeach; ?>
		</table>