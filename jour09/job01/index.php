<?php

    $link= mysqli_connect("127.0.0.1", "root", "", "jour08");
    $query= mysqli_query($link, "SELECT * FROM etudiants");
	$resultat= mysqli_fetch_all($query, MYSQLI_ASSOC);
	
?>

<table>
	<tr>
		<th>id</th>
		<th>prenom</th>
		<th>nom</th>
		<th>naissance</th>
        <th>sexe</th>
        <th>email</th>
	</tr>
	<?php foreach($resultat as $etudiants): ?>
		<tr>
			<td><?=$etudiants['id']?></td>
			<td><?=$etudiants['prenom']?></td>
			<td><?=$etudiants['nom']?></td>
			<td><?=$etudiants['naissance']?></td>
            <td><?=$etudiants['sexe']?></td>
            <td><?=$etudiants['email']?></td>
		</tr>
	<?php endforeach; ?>
</table>

		