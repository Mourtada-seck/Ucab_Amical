<?php

require_once("../model/userDB.php");

//Ajout user
if (isset($_POST['frmAddUser'])) {
    
    //Recuperation des informations.
    // extract($_POST);
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $adresse = $_POST["adresse"];
    $mail = $_POST["mail"];
    $telephone = $_POST["telephone"];
    $nomPhoto = $_FILES['photo']['name'];
    $password= $_POST["password"];
    $role = $_POST["role"];
    
    //Uploading de l'image
    $file_tmp_name = $_FILES['photo']['tmp_name'];
    move_uploaded_file($file_tmp_name, "../public/images/$nomPhoto");

    $reponseBD = adduser($nom, $prenom, $adresse, $mail, $telephone, $nomPhoto, $password, $role);

    if ($reponseBD == 1) {
        header("location:listeUser");
    }
    else
    {
        echo "Erreur d'ajout de l'utilisateur"; die;
    }
    
}
//edit User
if (isset($_POST['frmEditUser'])) {
    
    //Recuperation des informations.
    // extract($_POST);
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $adresse = $_POST["adresse"];
    $mail = $_POST["mail"];
    $telephone = $_POST["telephone"];
    $nomPhoto = $_FILES['photo']['name'];
    $password= $_POST["password"];
    $role = $_POST["role"];
    
    //Uploading de l'image
    if ($nomPhoto != "") {
        $file_tmp_name = $_FILES['photo']['tmp_name'];
        move_uploaded_file($file_tmp_name, "../public/images/$nomPhoto");
    }
    else
    {
        $nomPhoto = getByIduser($_POST['idUser'])->fetch()['photo'];
    }
    $reponseBD = adduser($nom, $prenom, $adresse, $mail, $telephone, $nomPhoto, $password, $role);

    if ($reponseBD == 1) {
        header("location:listeUser");
    }
    else
    {
        echo "Erreur de modification de la user"; die;
    }
}

//permet de supprimer un utilisateur
if (isset($_GET['suppression'])) {
    
    $reponseBD =  desactiverUser($_GET['idUser']);

    if ($reponseBD == 1) {
        header("location:listeUser");
    }
    else
    {
        echo "Erreur de suppression de l'utilisateur"; die;
    }

}
//permet de restaurer un user
if (isset($_GET["restaurer"])) {
    
    $reponseBD = activerUser( $_GET["idUser"]);

    if ($reponseBD == 1) {
        header("location:corbeilleUser");
    }
    else
    {
        echo "Erreur de restauration de l'utilisateur"; die;
    }

}
//permet de voir la page de modification
if (isset($_GET["edition"])) {

    header("location:editUser?idUser=" .$_GET['idUser']);
    
}

?>