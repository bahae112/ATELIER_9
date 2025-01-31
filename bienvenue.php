<?php
session_start();
if(isset($_SESSION['utilisateur'])){
	echo "bienvenue " .$_SESSION['utilisateur']."<br>";
	echo "<a href='connexion.html'>deconnexion</a>";
}
else{
	header('location:connexion.html');
}
?>