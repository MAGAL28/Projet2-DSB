<?php
if (isset($_POST["mail"])) 
{
	$_POST["mail"]=htmlspecialchars($_POST["mail"]);

	if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST["mail"]))
	{
		echo 'L\'adresse' .$_POST["mail"] . 'est <strong> valide </strong> !';
	}else 
	{
		echo 'L\'adresse ' .$_POST["mail"] . 'n\'est pas <strong> valide </strong> recommencez !';	
	}
}
?>