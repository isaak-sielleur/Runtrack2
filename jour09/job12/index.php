<?php

    $link= mysqli_connect("127.0.0.1", "root", "", "jour08");

    $query= mysqli_query($link, "SELECT prenom, nom, naissance FROM etudiants WHERE naissance BETWEEN '1998/01/01' AND '2018/01/01'");
    $resultat= mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<table border="1">
	<tr>

	    <th>prenom</th>
		<th>nom</th>
		<th>naissance</th>

    </tr>

    <?php foreach($resultat as $etudiant): ?>
                
		<tr>

			<td><?=$etudiant['prenom']?></td>
			<td><?=$etudiant['nom']?></td>
            <td><?=$etudiant['naissance']?></td>

        </tr>
            
    <?php endforeach; ?>
            
</table>