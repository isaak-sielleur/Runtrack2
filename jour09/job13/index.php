<?php

    $link= mysqli_connect("127.0.0.1", "root", "", "jour08");

    $query= mysqli_query($link, "SELECT salles.nom, etage.nom FROM salles INNER JOIN etage ON salles.id = etage.id");
    $resultat= mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<table border="1">
	<tr>

	    <th>nom etage</th>
		<th>nomsalles</th>

    </tr>

    <?php foreach($resultat as $nom): ?>
                
		<tr>

			<td><?=$nom['etage.id']?></td>
			<td><?=$nom['salles.id']?></td>

        </tr>
            
    <?php endforeach; ?>
            
</table>