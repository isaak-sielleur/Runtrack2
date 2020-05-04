<?php


$id="IsaakS";
$age="22";
$taille="10,8";
$booleen = true;

?>


<table>
    <thead>
        <th>Type</th>
        <th>Nom</th>
        <th>Valeur</th>
    </thead>

    <tbody>
        <tr>
            <td>Nombre entier</td>
            <td>$age</td>
            <td><?php echo $age; ?></td>
        </tr>

        <tr>
            <td>Nombre a virgules flottantes</td>
            <td>$taille</td>
            <td><?php echo $taille; ?></td>
        </tr>

        <tr>
            <td>Chaine de caracteres</td>
            <td>$id</td>
            <td><?php echo $id; ?></td>
        </tr>

        <tr>
            <td>Booleen</td>
            <td>$booleen</td>
            <td><?php echo $booleen; ?></td>
        </tr>
    </tbody>
</table>