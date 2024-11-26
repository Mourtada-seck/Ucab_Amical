<?php

    require_once("../model/contactDB.php");


    //Ajout Contact
    if (isset($_POST['frmAddContact'])) {
        
        //Recuperation des informations.
        $nom = $_POST["nom"];
        $emeil = $_POST["emeil"];
        $objet = $_POST["objet"];
        $message = $_POST["message"];
    
        $reponseBD = addcontact($nom, $emeil, $objet, $message);

        if ($reponseBD == 1) {
            header("location:home");
        }
        else
        {
            echo "Erreur d'ajout de la contact"; die;
        }
        
    }

?>