<?php 
      
      $nombre = 0;
      $text1="Fizz";
      $text2="Buzz";
      $text3="FizzBuzz";

      while ( $nombre <= 100) 
      {

            if ($nombre % 3 == 0 && $nombre % 5 != 0)
            {     
                  echo "$text1";
                  echo "<br />";
                  $nombre++;
            }

            elseif ($nombre % 5 == 0 && $nombre % 3 != 0)
            {     
                  echo "$text2";
                  echo "<br />";
                  $nombre++;
            }

            elseif ($nombre % 3 == 0 && $nombre % 5 == 0)
            {     
                  echo "$text3";
                  echo "<br />";
                  $nombre++;
            }

            else
            {     
                  echo $nombre;
                  echo "<br />";
                  $nombre++;
            }

      }

 ?>