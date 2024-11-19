<?php
session_start();
//Appelle du fichier db.php
require_once("db.php");



//permat de recuperer la liste user dans la bd
function getAllGalerie()
{
    $requete = "SELECT * FROM galeries WHERE etat = 1";
    try {
        return getConnexion()->query($requete); //exécution de la requette
    } catch (PDOException $error) {
        die("Erreur lors de la recuperation de la liste des utilisateur :" . $error->getMessage());
    }
}

//permet de recuperer la liste des users supprimees

function getCorbeilleGalerie()
{
    $requete = "SELECT * FROM galeries WHERE etat = 0";
    try {
        return getConnexion()->query($requete); //exécution de la requette
    } catch (Exception $error) {
        die("Erreur lors de la recuperation des galeries supprimées :" . $error->getMessage());
    }
}

function addGalerie($nom, $photo, $description)
{
    $date_Actuelle = date("Y-m-d");
    $id_user_connecte = $_SESSION['id_user'];
    
    $requete = "INSERT INTO galeries VALUES(null, '$nom', '$photo', '$description', default, 
    '$date_Actuelle', null, null, $id_user_connecte, null, null)";
    try {
        return getConnexion()->exec($requete); //exécution de la requette
    } catch (Exception $error) {
        die("Erreur lors de la recuperation de la liste des galeries :" .$error->getMessage());
    }
}


//permet de modifier une user dans la BD
// function editGalerie($id_galerie, $nom, $photo, $description,)
// {
//     $date_Actuelle = date("Y-m-d");
//     $requete = "UPDATE galeries SET nom='$nom', photo='$photo', description='$description',
//     updated_at='$date_Actuelle', updated_by=1 WHERE id_galerie='$id_galerie'";
//     try {
//         return getConnexion()->exec($requete); //exécution de la requette
//     } catch (Exception $error) {
//         die("Erreur lors de la recuperation de la liste des galeries :" .$error->getMessage());
//     } 
// }

//permet d'activer une user dans la BD
function activerGalerie($id_galerie)
{
    $date_Actuelle = date("Y-m-d");
    $id_user_connecte = $_SESSION['id_user'];

    $requete = "UPDATE galeries SET etat=1, updated_at='$date_Actuelle',
    updated_by=$id_user_connecte WHERE id_galerie='$id_galerie'";
    try {
        return getConnexion()->exec($requete); //exécution de la requette
    } catch (Exception $error) {
        die("Erreur d'activation de la galerie :" .$error->getMessage());
    }
}

//permet désactiver une user dans la BD
function desactiverGalerie($id_galerie)
{
        $date_Actuelle = date("Y-m-d");
        $id_user_connecte = $_SESSION['id_user'];
        
    $requete = "UPDATE galeries SET etat=0, updated_at='$date_Actuelle', updated_by=$id_user_connecte WHERE id_galerie='$id_galerie'";
    try {
        return getConnexion()->exec($requete); //exécution de la requette
    } catch (Exception $error) {
        die("Erreur de suppression de la galerie :" .$error->getMessage());
    } 
}

//permet recuperer un utilisateur dans la BD
function getByIdGalerie($id_galerie)
{
    $requete = "SELECT * FROM galeries WHERE id_galerie='$id_galerie' LIMIT 1";
    try {
        return getConnexion()->query($requete); //exécution de la requette
    } catch (Exception $error) {
        die("Erreur de recuperation de la galerie via son id:" .$error->getMessage());
    } 
}

?>