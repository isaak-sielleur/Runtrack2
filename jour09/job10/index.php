<?php

    $link= mysqli_connect("127.0.0.1", "root", "", "jour08");

    $query= mysqli_query($link, "SELECT * FROM salles ORDER BY capacite ASC");
    $resultat= mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<table border="1">
	<tr>

	    <th>id</th>
		<th>nom</th>
		<th>id_etage</th>
        <th>capacite</th>

    </tr>
            
    <?php foreach($resultat as $etage): ?>
                
		<tr>

			<td><?=$etage['id']?></td>
			<td><?=$etage['nom']?></td>
			<td><?=$etage['id_etage']?></td>
            <td><?=$etage['capacite']?></td>

        </tr>
            
    <?php endforeach; ?>
            
</table>