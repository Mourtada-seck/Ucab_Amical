<?php

    //Appelle du fichier db.php
    require_once("db.php");

    //Permet de recuperer la liste des contact dans la bd
    function getAllcontact()
    {
        $requete = "SELECT * FROM contacts";
        try {
            return getConnexion()->query($requete); //exécution de la requette
        } catch (Exception $error) {
            die("Erreur lors de la recuperation de la liste des contacts : " . $error->getMessage());
        }
    }


    //Permet d'ajouter une contact dans la BD
    function addcontact($nom, $emeil, $objet, $message)
    {
        $date_actuelle = date("Y-m-d");
        $requete = "INSERT INTO contacts VALUES(null, '$nom', '$emeil', '$objet', '$message')";
        try {
            return getConnexion()->exec($requete); //exécution de la requette
        } catch (Exception $error) {
            die("Erreur d'ajout de la contact : " . $error->getMessage());
        }
    }
   

?>