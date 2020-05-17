<!DOCTYPE html>
<html>

    <head>

        <title>jour07 > job02</title>

    </head>

    <body>

        <?php

            setcookie ('nbvisites', 1);

            if (isset($_COOKIE['nbvisites']))
            {
                $nbvisites = $_COOKIE['nbvisites'];
                $nbvisites++;

                setcookie ('nbvisites', $nbvisites);
            }

            if (isset($_POST['bouton']))
            {
                setcookie('nbvisites', 1);
                header('location:index.php');
            }

            echo $_COOKIE['nbvisites'];

        ?>
            
        <form method="post">
            <input type="submit" name="bouton" value="bouton">
        </form>

    </body>

</html>