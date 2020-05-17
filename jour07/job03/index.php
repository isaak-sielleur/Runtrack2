<?php

    session_start();

    if(isset($_POST['Destroy']))
    {
        session_destroy();
        header('Location: index.php');
    }

    if(!isset($_SESSION['session']))
    {
        $_SESSION['session']=[];
    }

    if(isset($_POST['prenom']))
    {
        array_push($_SESSION['session'],$_POST['prenom']);
    }
    foreach ($_SESSION['session'] as $prenom) 
    {
        echo $prenom."<br/>";
    }

?>

<html>

    <head>

        <title>job03</title>

    </head>

    <body>

        <form action="index.php" method="post">

            <input type="text" name="prenom" require/>
            <br/>
            <br/>
            <input type="submit" value="submit" name="Submit"/>

        </form>

        <form action="index.php" method="post">

            <input type="submit" value="destroy" name="Destroy"/>

        </form>

    </body>

</html>