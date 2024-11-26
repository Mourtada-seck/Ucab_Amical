<?php

//Appelle du fichier db.php
require_once("db.php");



//permat de recuperer la liste user dans la bd
function getAlluser()
{
    $requete = "SELECT * FROM users WHERE etat = 1";
    try {
        return getConnexion()->query($requete); //exécution de la requette
    } catch (PDOException $error) {
        die("Erreur lors de la recuperation de la liste des utilisateur :" . $error->getMessage());
    }
}

//permet de recuperer la liste des users supprimees

function getCorbeilleuser()
{
    $requete = "SELECT * FROM users WHERE etat = 0";
    try {
        return getConnexion()->query($requete); //exécution de la requette
    } catch (Exception $error) {
        die("Erreur lors de la recuperation des users supprimées :" . $error->getMessage());
    }
}

function adduser($nom, $prenom, $adresse, $email, $telephone,  $photo, $role, $password)
{

    $date_Actuelle = date("Y-m-d");
    $requete = "INSERT INTO users VALUES(null, '$nom',  '$prenom', '$photo', '$email', '$telephone',
    '$adresse','$password', '$role', '$date_Actuelle', null, null, 1, null, null, default)";
    try {
        return getConnexion()->exec($requete); //exécution de la requette
    } catch (Exception $error) {
        die("Erreur lors de la recuperation de la liste des utilisateurs :" .$error->getMessage());
    }
}


//permet de modifier une user dans la BD
function edituser($id_user, $nom, $prenom, $adresse, $email, $telephone,  $photo, $role, $password)
{
    $date_Actuelle = date("Y-m-d");
    $requete = "UPDATE users SET nom='$nom', prenom='$prenom', adresse='$adresse', email='$email',
    telephone='$telephone', photo='$photo', password='$password', role='$role',
    updated_at='$date_Actuelle', updated_by=1 WHERE id_user='$id_user'";
    try {
        return getConnexion()->exec($requete); //exécution de la requette
    } catch (Exception $error) {
        die("Erreur lors de la recuperation de la liste des utilisateurs :" .$error->getMessage());
    } 
}

//permet d'activer une user dans la BD
function activerUser($id_user)
{
    $date_Actuelle = date("Y-m-d");

    $requete = "UPDATE users SET etat=1, updated_at='$date_Actuelle',
    updated_by=1 WHERE id_user='$id_user'";
    try {
        return getConnexion()->exec($requete); //exécution de la requette
    } catch (Exception $error) {
        die("Erreur d'activation de l'utilisateur :" .$error->getMessage());
    }
}

//permet désactiver une user dans la BD
function desactiverUser($id_user)
{
        $date_Actuelle = date("Y-m-d");
    $requete = "UPDATE users SET etat=0, updated_at='$date_Actuelle', updated_by=1 WHERE id_user='$id_user'";
    try {
        return getConnexion()->exec($requete); //exécution de la requette
    } catch (Exception $error) {
        die("Erreur desactiver de l'utilisateur :" .$error->getMessage());
    } 
}

//permet recuperer un utilisateur dans la BD
function getByIduser($id_user)
{
    $requete = "SELECT * FROM users WHERE id_user='$id_user' LIMIT 1";
    try {
        return getConnexion()->query($requete); //exécution de la requette
    } catch (Exception $error) {
        die("Erreur de recuperation de l'utilisateur via son id:" .$error->getMessage());
    } 
}

?>