<?php
include "C:/xampp/htdocs/Atelier8_9/model/utilisateur.php";
session_start();
if(isset($_SESSION['utilisateur'])){
	echo "bienvenue " ."<br>";
	echo "<a href='connexion.html'>deconnexion</a>";
}
else{
	header('location:connexion.html');
}
?>