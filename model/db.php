<?php

    //Permet de se connecter a la Base de données
    function getConnexion()
    {
        $host = "localhost";
        $dbname = "ucab_amical";
        $user = "root";
        $password = "";

        $dsn = "mysql:host=$host; dbname=$dbname;";

        try {
            $db = new PDO($dsn, $user, $password);
        } catch (PDOException $error) {
            die("Erreur de connexion a la base de donnees :" . $error->getMessage());
        }
        
        return $db;
    }
?>