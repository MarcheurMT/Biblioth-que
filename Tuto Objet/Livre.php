<?php

    include ('BDD.php');
    class Livre {
        public $ID;
        public $Titre;
        public $Auteur;
        public $Parution;
        public $Resume;
        public $URL;
        public $NombreE;
        public $NombreER;
        public $CodeE;

        public function creerlivre($Titre, $Auteur, $Parution, $Resume, $URL, $NombreE, $NombreER, $CodeE){
            global $pdo;
            // on test toutes les variables
            if (empty($_POST['Titre'])){
                echo ('<font color="red"> Le Champ titre est obligatoire </font>');
            }

            if (empty($_POST['Auteur'])){
                echo ('<font color="red"> Le Champ est obligatoire </font>');
            }

            if (empty($_POST['Parution'])){
                echo ('<font color="red"> Le Champ est obligatoire </font>');
            }

            if (empty($_POST['NER'])){
                echo ('<font color="red"> Le Champ est obligatoire </font>');
            }

            if (empty($_POST['CE'])){
                echo ('<font color="red"> Le Champ est obligatoire </font>');
            }

            $sql = "INSERT INTO `Livre` (`Titre`, `Auteur`, `Parution`, `Resume`, `URL`, `NombreE`, `NombreER`, `CodeE`) VALUES (?, ?, ? ,? ,? ,? ,? ,?)";
            $pdo->prepare($sql)->execute([$Titre, $Auteur, $Parution, $Resume, $URL, $NombreE, $NombreER, $CodeE]);
            // Trouver $ID
            $ID = $pdo->lastInsertId();
            $this->majattributs($ID, $Titre, $Auteur, $Parution, $Resume, $URL, $NombreE, $NombreER, $CodeE);
            //var_dump($sql);
        }
            public function majattributs ($ID, $Titre, $Auteur, $Parution, $Resume, $URL, $NombreE, $NombreER, $CodeE) {
                $this->ID=$ID;
                $this->Titre=$Titre;
                $this->Auteur=$Auteur;
                $this->Parution=$Parution;
                $this->Resume=$Resume;
                $this->URL=$URL;
                $this->NE=$NombreE;
                $this->NER=$NombreER;
                $this->CE=$CodeE; 
            }

            public function afficher_livre($ID){
                global $pdo;
                $sql = "SELECT * FROM livre WHERE ID= $ID";
                $stmt= $pdo->query($sql);
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $this->majattributs($row['ID'], $row['Titre'], $row['Auteur'], $row['Parution'], $row['Resume'], $row['URL'], $row['NombreE'], $row['NombreER'], $row['CodeE']);
            }

            public function modifier_base($ID, $Titre, $Auteur, $Parution, $Resume, $URL, $NombreE, $NombreER, $CodeE){
                global $pdo;
                $sql = "UPDATE livre SET Titre=$Titre, Auteur=$Auteur, Parution=$Parution, Resume=$Resume URL=$URL NombreE=$NombreE NombreER=$NombreER CodeE=$CodeE WHERE ID= $ID";
                $stmt= $pdo->query($sql);
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $this->majattributs($row['ID'], $row['Titre'], $row['Auteur'], $row['Parution'], $row['Resume'], $row['URL'], $row['NombreE'], $row['NombreER'], $row['CodeE']);
            }

            public function supprimer_livre($ID){
                global $pdo;
                $sql = "DELETE FROM livre WHERE ID= $ID";
                $stmt= $pdo->query($sql);
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            }
    }