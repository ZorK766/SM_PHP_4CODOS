

<?php 

//Que branle ce fichier php dans le dossier js ?

 //panier.php

if (isset($POST['url']))
{
	// file_get_contents charge la page web à l'url fournie dans la variable POST
	// Elle offre une grande souplesse car elle peut charger la totalité d'un fichier ou d'une page web
	// d'un serveur local ou distant. Prend en compte pages déplacées et redirections
	echo file_get_contents('http://'.SanitizeStrings($_POST['url']));
	
}

/**
* SanitizeStrings protège les données publiques
* Dans le cas, où elle ne serait pas utilisée, les données non assainies risqueraient de donner le 
* controle du code à un utilisateur
*/


function SanitizeStrings()
{
	$var = strip_tags($var);
	$var = htmlentities($var);
	return stripslashes($var);
}


?>
