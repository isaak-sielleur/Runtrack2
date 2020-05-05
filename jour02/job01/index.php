<?php

$nombre = 0;

while ($nombre <= 1337)
{
    if ($nombre == 42) 
    {
        echo "<u><b> $nombre </u></b><br/>";
        $nombre++;
    }

    else
    {
        echo "$nombre <br/>";
        $nombre++;
    }
}

?>