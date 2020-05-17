<?php 

    session_start(); 

?>

<!DOCTYPE html>
<html>

	<head>

		<meta charset="UTF-8">
		<title>jour07 > Job01</title>

	</head>

	<body>

		<?php

			if (!isset($_SESSION['nbvisites']))
			{
				$_SESSION['nbvisites'] = 1;
            }
            
			else
			{
				$_SESSION['nbvisites']++;
            }

			if (isset($_POST['bouton']))
			{
				session_destroy();
				header('location:index.php');
            }
            
            echo $_SESSION['nbvisites'];
            
		?>
		
		<form method="post">

			<input type="submit" name="bouton" value="bouton">

		</form>

	</body>

</html>

	
