<?php

    $link= mysqli_connect("127.0.0.1", "root", "", "jour08");

    $query= mysqli_query($link, "SELECT * FROM etage");
    $resultat= mysqli_fetch_all($query, MYSQLI_ASSOC);

    $query2= mysqli_query($link, "SELECT SUM(superficie) FROM etage");
    $resultat2= mysqli_fetch_all($query2, MYSQLI_ASSOC);

?> 

<table border="1">
	<tr>

	    <th>id</th>
		<th>nom</th>
		<th>numero</th>
        <th>superficie</th>
        <th>superficie_totale</th>

    </tr>
            
    <?php foreach($resultat as $etage): ?>
                
		<tr>

			<td><?=$etage['id']?></td>
			<td><?=$etage['nom']?></td>
			<td><?=$etage['numero']?></td>
            <td><?=$etage['superficie']?></td>

            <?php foreach($resultat2 as $etage2): ?>
                <td><?=$etage2['SUM(superficie)']?></td>
            <?php endforeach; ?>

        </tr>
            
    <?php endforeach; ?>
            
</table>