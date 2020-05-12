<?php 

    if (isset($_POST['changerstyle'])) 
    {
        if (!empty($_POST['style'])) {

            switch($_POST['style']){
                case 'style1':
                    $style1 = "1";
                break;
                case 'style2':
                    $style2 = "2";
                break;
                case 'style3':
                    $style3 = "3";
                break;
                }
        }
    }

?>

<html>

    <head>
        <link rel="stylesheet" href="style<?php if(isset($style1)) echo $style1; if(isset($style2)) echo $style2; if(isset($style3)) echo $style3; ?>.css">
        <link href="https://fonts.googleapis.com/css2?family=Acme&family=Oswald&family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    </head>

    <body>
        <section>
            <form action="index.php" method="post">
                <select name="style" id="">
                    <option value="" disabled selected>Choisir un style</option>
                    <option value="style1">Style 1</option>
                    <option value="style2">Style 2</option>
                    <option value="style3">Style 3</option>
                </select>
                <button type="submit" name="changerstyle" >Changer le style du formulaire</button>

            </form>
        </section>
    </body>

</html>
