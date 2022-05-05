<?php
    include ('BDD.php');
    include ('Livre.php');
    

    if(isset($_POST['Titre']) && isset($_POST['Auteur']) AND isset($_POST['Parution']) AND isset($_POST['Resume']) AND isset($_POST['URL']) AND isset($_POST['NE']) AND isset($_POST['NER']) AND isset($_POST['CE'])){
        
        $monlivre = NEW Livre;
        $monlivre->creerlivre($_POST['Titre'], $_POST['Auteur'], $_POST['Parution'], $_POST['Resume'], $_POST['URL'], $_POST['NE'], $_POST['NER'], $_POST['CE']);
        
        echo $monlivre->Titre;
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrée de Données</title>
</head>
<body>
    <form method="post" action="Objet.php">
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
    <table>
    <br>
    <tr>
        <th>ID</th> 
        <th>Titre</th> 
        <th>Auteur</th>
        <th>Parution</th>
        <th>Résumé</th>
        <th>URL</th>
        <th>NombreE</th>
        <th>NombreER</th>
        <th>CodeE</th>
        
    </tr>
    <br>
    </table>
    <?php 
    
    $sql = "SELECT * FROM livre";
    $stmt= $pdo->query($sql);
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>

    <table>
    <tr>
    <td><?php echo htmlspecialchars($row['ID']); ?></td>
    <td><?php echo htmlspecialchars($row['Titre']); ?></td>
    <td><?php echo htmlspecialchars($row['Auteur']); ?></td>
    <td><?php echo htmlspecialchars($row['Parution']); ?></td>
    <td><?php echo htmlspecialchars($row['Resume']); ?></td>
    <td><?php echo htmlspecialchars($row['URL']); ?></td>
    <td><?php echo htmlspecialchars($row['NombreE']); ?></td>
    <td><?php echo htmlspecialchars($row['NombreER']); ?></td>
    <td><?php echo htmlspecialchars($row['CodeE']); ?></td>
    <td><a href="AfficherLivre.php?ID=<?php echo $row['ID']?>">Afficher</a></td>
    <td><a href="ModifierLivre.php?ID=<?php echo $row['ID']?>">Modifier</a></td>
    <td><a href="Supprimer.php?ID=<?php echo $row['ID']?>">Supprimer</a></td>
    </tr>
    </table>
    <?php endwhile; ?>
</body>
</html>