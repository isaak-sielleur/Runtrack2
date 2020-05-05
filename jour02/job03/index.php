<?php

$nombre = 0;
$text  = "La Plateforme_";

for ($nombre ; $nombre <21 ; $nombre++)
{ 
    echo "<i> $nombre </i><br/>";
}


for ($nombre; $nombre < 25 ; $nombre++) 
{ 
    echo "$nombre<br/>";
}


for ($nombre; $nombre <51 ; $nombre++) 
{ 
    if ($nombre==42)
    {
        echo "$text<br/>";
    }

    else
    {
        echo "<u> $nombre </u><br/>";
    }
}

for ($nombre; $nombre <=100 ; $nombre++) 
{ 
    echo "$nombre<br/>";
}

?>