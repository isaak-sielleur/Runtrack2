<?php
   if(count($_POST)>0) {   
   	if ($_POST["username"]=="John" && $_POST["password"]=="Rambo")                  
   		{                      
   			echo "C'est pas ma guerre";                  
   		}    
   			else                     
   			{                    
   				echo "Votre pire cauchemar";                
   			}  
   		}      
 ?>

<form name="mon-formulaire1" method="post">
<p>
   <label for="prenom">Nom d'utilisateur :<br /> </label>
   <input type="text" name="username" />
</p>
<p>
   <label for="passe">Votre mot de passe :<br /></label>
   <input type="password" name="password" />
</p>
<button>envoyer</button>
</form>