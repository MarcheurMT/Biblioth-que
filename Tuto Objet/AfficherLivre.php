<?php 
include ('./Livre.php');

$MonLivre= new Livre;

$MonLivre->afficher_livre($_GET["ID"]);


echo "<br>";
echo "Titre du livre : ".$MonLivre->Titre;
echo "<br>";
echo "L'Auteur du livre : ".$MonLivre->Auteur;
echo "<br>";
echo "Date de Parution du livre : ".$MonLivre->Parution;
echo "<br>";
echo "Le résumé du livre : ".$MonLivre->Resume;
echo "<br>";
echo "l'URL TA MERE du livre : ".$MonLivre->URL;
echo "<br>";
echo "Nombre d'exemplaire du livre : ".$MonLivre->NombreE;
echo "<br>";
echo "Nombre d'exemplaire restants du livre : ".$MonLivre->NombreER;
echo "<br>";
echo "Code du livre : ".$MonLivre->CodeE;