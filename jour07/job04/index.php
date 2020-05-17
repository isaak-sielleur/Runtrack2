<?php

	if(isset($_POST['destroy']))
		{
            echo "annule";
			setcookie('prenom','',-1);
			header('Location: index.php');
        }
        
	if((!isset($_POST['prenom'])||isset($_POST['destroy']))&&!isset($_COOKIE["prenom"]))
	{						
        echo '<html>

                <head>

                    <title>job04</title>

                </head>

                <body>

                    <form action="index.php" method="post">

                        <input type="text" name="prenom" require/>
                        <br/>
                        <br/>
                        <input type="submit" value="connection" name="Connexion"/>

                    </form>

                </body>

            </html>';
    }
                
    else
    {	
        if (!isset($_COOKIE["prenom"])) 
        {
            $pos=$_POST["prenom"];
            setcookie('prenom', $pos, 0);
            header('Location: index.php');
        }

        else
        {
        echo"<h1>Bonjour<u>".$_COOKIE["prenom"]."</u>!</h1>";

        echo "<form method='POST' action='index.php' >
            <input type='submit' name='destroy' value='quitter'>
            </form>";
        }
    }
?> 