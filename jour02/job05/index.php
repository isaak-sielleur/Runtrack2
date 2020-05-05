<?php

    $number = 2;

    while ($number < 1000 )
    {

        $numberdiv=0;

        for ( $div=1;$div<=$number;$div++)
        {

            if (($number%$div)==0)
            {
                $numberdiv++;
            }

        }

        if ($numberdiv<3)
        {
            echo $number;
            echo "<br/>";
        }

        $number=$number+1;

    }

?>