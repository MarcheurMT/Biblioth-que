<?php 
include ("./Livre.php");
include ('BDD.php');

$MonLivre= new Livre;
$MonLivre->supprimer_livre($_GET["ID"]);
?>

<a href="Objet.php">Le Livre a été down!</a>