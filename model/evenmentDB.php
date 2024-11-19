<?php
@session_start();
//Appelle du fichier db.php
require_once("db.php") ;

//permat de recuperer la liste user dans la bd
function getAllEvenment()
{
$requete = "SELECT * FROM evenments WHERE etat = 1";
try {
return getConnexion()->query($requete); //exécution de la requette
} catch (PDOException $error) {
die("Erreur lors de la recuperation de la liste des evennements :" . $error->getMessage());
}
}

//permet de recuperer la liste des users supprimees

function getCorbeilleEvenment()
{
$requete = "SELECT * FROM evenments WHERE etat = 0";
try {
return getConnexion()->query($requete); //exécution de la requette
} catch (Exception $error) {
die("Erreur lors de la recuperation des evenments supprimées :" . $error->getMessage());
}
}

function addEvenment($nom, $description, $photo)
{
try {
$pdo = new PDO('mysql:host=localhost;dbname=ucab_amical', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$date_Actuelle = date("Y-m-d");
$id_user_connecte = $_SESSION['id_user'];
$requete = $pdo->prepare("INSERT INTO evenments (nom, description, photo, etat, created_at, created_by)
VALUES (:nom, :description, :photo, DEFAULT, :created_at, :created_by)");
$requete->bindParam(':nom', $nom);
$requete->bindParam(':description', $description);
$requete->bindParam(':photo', $photo);
$requete->bindParam(':created_at', $date_Actuelle);
$requete->bindParam(':created_by', $id_user_connecte);

if ($requete->execute()) {
return 1;
} else {
return 0;
}
} catch (PDOException $e) {
echo "Erreur lors de l'ajout de l'événement : " . $e->getMessage();
return 0;
}
}


//permet de modifier un evennement dans la BD
function editEvenment($id_evenment, $nom, $description, $photo)
{
$date_Actuelle = date("Y-m-d");
$requete = "UPDATE evenments SET nom='$nom', description='$description',
photo='$photo',
updated_at='$date_Actuelle', updated_by=1 WHERE id_evenment='$id_evenment'";
try {
return getConnexion()->exec($requete); //exécution de la requette
} catch (Exception $error) {
die("Erreur lors de la recuperation de la liste des evenments :" .$error->getMessage());
}
}

//permet d'activer une user dans la BD
function activerEvenment($id_evenment)
{
$date_Actuelle = date("Y-m-d");
$id_user_connecte = $_SESSION['id_user'];

$requete = "UPDATE evenments SET etat=1, updated_at='$date_Actuelle',
updated_by=$id_user_connecte WHERE id_evenment='$id_evenment'";
try {
return getConnexion()->exec($requete); //exécution de la requette
} catch (Exception $error) {
die("Erreur d'activation de l'evenments :" .$error->getMessage());
}
}

//permet désactiver un evenments dans la BD
function desactiverEvenment($id_evenment)
{
$date_Actuelle = date("Y-m-d");
$id_user_connecte = $_SESSION['id_user'];

$requete = "UPDATE evenments SET etat=0, updated_at='$date_Actuelle', updated_by= $id_user_connecte WHERE
id_evenment='$id_evenment'";
try {
return getConnexion()->exec($requete); //exécution de la requette
} catch (Exception $error) {
die("Erreur desactivation de l'evenments :" .$error->getMessage());
}
}

// permet recuperer un evenments dans la BD
function getByIdEvenment($id_evenment)
{
$requete = "SELECT * FROM evenments WHERE id_evenment='$id_evenment' LIMIT 1";
try {
return getConnexion()->query($requete); //exécution de la requette
} catch (Exception $error) {
die("Erreur de recuperation de l'evenments via son id:" .$error->getMessage());
}
}

?>