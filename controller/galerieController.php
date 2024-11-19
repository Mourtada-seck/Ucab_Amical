<?php

require_once("../model/galerieDB.php");

//Ajout user
if (isset($_POST['frmAddGalerie'])) {
    
    //Recuperation des informations.
    // extract($_POST);
    $nom = $_POST["nom"];
    $description = $_POST["description"];
    $nomPhoto = $_FILES['photo']['name'];
    
    
    //Uploading de l'image
    $file_tmp_name = $_FILES['photo']['tmp_name'];
    move_uploaded_file($file_tmp_name, "../public/images/$nomPhoto");

    $reponseBD = addGalerie($nom, $nomPhoto, $description);

    if ($reponseBD == 1) {
        header("location:listeGalerie");
    }
    else
    {
        echo "Erreur d'ajout de la galerie"; die;
    }
    
}
//edit User
if (isset($_POST['frmEditGalerie'])) {
    
    //Recuperation des informations.
    // extract($_POST);
    $nom = $_POST["nom"];
    $description = $_POST["description"];
    $nomPhoto = $_FILES['photo']['name'];
   
    
    //Uploading de l'image
    if ($nomPhoto != "") {
        $file_tmp_name = $_FILES['photo']['tmp_name'];
        move_uploaded_file($file_tmp_name, "../public/images/$nomPhoto");
    }
    else
    {
        $nomPhoto = getByIdGalerie($_POST['idGalerie'])->fetch()['photo'];
    }
    $reponseBD = addGalerie($nom, $nomPhoto, $description);

    if ($reponseBD == 1) {
        header("location:listeGalerie");
    }
    else
    {
        echo "Erreur de modification de la galerie"; die;
    }
}

//permet de supprimer un utilisateur
if (isset($_GET['suppression'])) {
    
    $reponseBD =  desactiverGalerie($_GET['idGalerie']);

    if ($reponseBD == 1) {
        header("location:listeGalerie");
    }
    else
    {
        echo "Erreur de suppression de la galerie"; die;
    }

}
//permet de restaurer un user
if (isset($_GET["restaurer"])) {
    
    $reponseBD = activerGalerie( $_GET["idGalerie"]);

    if ($reponseBD == 1) {
        header("location:corbeilleGalerie");
    }
    else
    {
        echo "Erreur de restauration de la galerie"; die;
    }

}
//permet de voir la page de modification
if (isset($_GET["edition"])) {

    header("location:editUser?idGalerie=" .$_GET['idGalrie']);
    
}


?>