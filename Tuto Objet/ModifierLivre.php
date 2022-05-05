<?php
include ("./Livre.php");
include ('BDD.php');

$MonLivre= new Livre;
$MonLivre->afficher_livre($_GET["ID"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
</head>
<body>
<form method="post" action="ModifierLivre.php">
        Titre : <input type="text" name="Titre" placeholder="Entrez le Titre" require/>
        <br>
        Auteur : <input type="text" name="Auteur" placeholder="Entrez l'Auteur" require/>
        <br>
        Parution : <input type="text" name="Parution" placeholder="Entrez la date" require/>
        <br>
        Résumé : <input type="text" name="Resume" placeholder="Entrez le résumé" />
        <br>
        URL : <input type="text" name="URL" placeholder="Entrez l'URL">
        <br>
        Nombre d'Exemplaires : <input type="text" name="NE" placeholder="Entrez le nombre d'EX" require/>
        <br>
        Nombre d'Exemplaires Restants : <input type="text" name="NER" placeholder="Entrez le nombre d'EXR" />
        <br>
        CodeE : <input type="text" name="CE" placeholder="Entrez le CodeE" require/>
        <br>
        <input type="submit" value="Confirmer">
        <br>
    </form>
</body>
</html>